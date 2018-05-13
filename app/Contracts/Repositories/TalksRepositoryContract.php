<?php

namespace App\Contracts\Repositories;

use App\Talk;
use Illuminate\Support\Collection;

interface TalksRepositoryContract
{
    public function all(): Collection;
}
