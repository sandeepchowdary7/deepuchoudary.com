<?php

namespace App\Repositories;

use App\Talk;
use League\CommonMark\Converter;
use Illuminate\Support\Collection;
use League\CommonMark\CommonMarkConverter;
use Illuminate\Contracts\Filesystem\Filesystem;
use App\Contracts\Repositories\TalksRepositoryContract;

class TalksRepository implements TalksRepositoryContract
{
    private $converter;

    public function __construct(Converter $converter, Filesystem $files)
    {
        $this->converter = $converter;
        $this->files = $files;
    }

    public function all(): Collection
    {
        return collect(array_map(function($talk) {
            return $this->converter->convertToHtml($this->files->get($talk));
        }, $this->files->files('talks')))->sort();
    }
}
