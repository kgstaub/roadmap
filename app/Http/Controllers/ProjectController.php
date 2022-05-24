<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function show($id)
    {
        $project = Project::query()->where('slug', $id)->firstOrFail();

        return view('project', [
            'project' => $project,
            'boards' => $project->boards()->visible()->with(['items' => function ($query) {
                return $query
                    ->popular()
                    ->withCount('votes');
            }])->get()
        ]);
    }
}
