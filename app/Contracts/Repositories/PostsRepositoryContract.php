<?php

namespace App\Contracts\Repositories;

use Illuminate\Support\Collection;

interface PostsRepositoryContract
{
    public function all(): Collection;
}
