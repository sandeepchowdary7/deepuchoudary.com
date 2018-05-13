<?php

namespace App\Http\Controllers;

use App\Talk;
use App\Http\Requests\TalkRequest;
use App\Contracts\Repositories\TalksRepositoryContract;

class TalksController extends Controller
{
    public function index(TalksRepositoryContract $talksRepository)
    {
        $talks = $talksRepository->all();

        return view('talks.index', compact('talks'));
    }
}
