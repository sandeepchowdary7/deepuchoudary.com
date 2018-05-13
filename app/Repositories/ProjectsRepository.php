<?php

namespace App\Repositories;

use App\Project;
use Illuminate\Support\Str;
use Spatie\Packagist\Packagist;
use Illuminate\Support\Collection;
use GrahamCampbell\GitHub\GitHubManager;
use App\Contracts\Repositories\ProjectsRepositoryContract;

class ProjectsRepository implements ProjectsRepositoryContract
{
    private $github;

    private $packagist;

    private static $downloadsAlias = [
        'laravel/laravel' => 'laravel/framework',
        'laravel-zero/laravel-zero' => 'laravel-zero/framework',
    ];

    private static $owner = [
        'nunomaduro',
        'laravel-zero',
    ];

    private static $contributor = [
        'laravel',
    ];

    private static $attributes = [
        'name',
        'full_name',
        'html_url',
        'description',
        'stargazers_count',
        'homepage',
    ];

    public function __construct(GitHubManager $github, Packagist $packagist)
    {
        $this->github = (clone $github)->user()->setPerPage(100);
        $this->packagist = clone $packagist;
    }

    public function all(): Collection
    {
        return $this->get()
            ->reject(function($repository) {
                return $repository['fork'] === true;
            })->reject(function($repository) {
                return $repository['stargazers_count'] < 5;
            })->sortByDesc('stargazers_count')
            ->take(20)
            ->map(function($repository) {
                $attributes = array_intersect_key($repository, array_flip(static::$attributes));
                $attributes['name'] = str_replace('-', ' ', Str::upper($repository['name']));
                $attributes['downloads_count'] = $this->getDownloadsCount($repository['full_name']);

                $org = explode('/', $repository['full_name'])[0];
                $attributes['owner'] = in_array($org, static::$owner);

                return new Project($attributes);
            });
    }

    protected function get(): Collection
    {
        $projects = collect();

        foreach (static::$owner as $org) {
            $projects = $projects->merge($this->github->repositories($org));
        }

        foreach (static::$contributor as $org) {
            $projects = $projects->merge(collect($this->github->repositories($org))
                ->sortByDesc('stargazers_count')
                ->take(1));
        }

        return $projects;
    }

    protected function getDownloadsCount(string $name): int
    {
        $name = static::$downloadsAlias[$name] ?? $name;
        $downloadsCount = 0;
        try {
            $package = $this->packagist->findPackageByName($name);
            $downloadsCount = current($package)['downloads']['total'];
        } catch (\Throwable $e) {
            //
        }

        return $downloadsCount;
    }
}
