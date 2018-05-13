<?php

namespace App\Providers;

use League\CommonMark\Converter;
use App\Repositories\TalksRepository;
use App\Repositories\PostsRepository;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;
use App\Repositories\ProjectsRepository;
use App\Repositories\NewsletterSubscribersRepository;
use App\Contracts\Repositories\TalksRepositoryContract;
use App\Contracts\Repositories\PostsRepositoryContract;
use App\Contracts\Repositories\ProjectsRepositoryContract;
use App\Contracts\Repositories\NewsletterSubscribersRepositoryContract;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(PostsRepositoryContract::class, PostsRepository::class);
        $this->app->singleton(ProjectsRepositoryContract::class, ProjectsRepository::class);
        $this->app->singleton(NewsletterSubscribersRepositoryContract::class, NewsletterSubscribersRepository::class);

        $this->app->singleton(TalksRepositoryContract::class, function () {
            return new TalksRepository(resolve(Converter::class), Storage::disk('content'));
        });
    }
}
