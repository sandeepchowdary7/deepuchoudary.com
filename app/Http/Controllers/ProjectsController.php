<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\Repositories\ProjectsRepositoryContract;

class ProjectsController extends Controller
{
    public function index(ProjectsRepositoryContract $projectsRepository)
    {
        $projects = $projectsRepository->all();

        return view('projects.index', compact('projects'));
    }
}
