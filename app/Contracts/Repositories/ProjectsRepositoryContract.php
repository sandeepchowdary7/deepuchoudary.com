<?php

namespace App\Contracts\Repositories;

use Illuminate\Support\Collection;

interface ProjectsRepositoryContract
{
    public function all(): Collection;
}
