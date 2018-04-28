<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\Project\UpdateProjectRequest;
use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;
use App\Http\Controllers\Controller;
use App\Models\Technology;
use App\Models\User;

class ProjectController extends Controller
{
    public function index()
    {
        if (request()->exists('user_id')) {
            $user = User::query()->find(request('user_id'));

            $projects = $user->projects()->paginate(request('count', 15));

            return response()->json($projects);
        }

        if (request()->exists('technology')) {
            $technology = Technology::query()->whereKey(request('technology'))->first();
            $projects = $technology->projects()->paginate(request('count', 15));

            return response()->json($projects);
        }

//        $projects = auth()->user()->attachProjects(request('count', 15));
        $projects = auth()->user()->projects()->get();

        return response()->json($projects);
    }

    public function show(Project $project)
    {
        return response()->json($project);
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        return response()->json($project->update($request));
    }

    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();

        return response()->json(Project::query()->create($data), 201);
    }

    public function destroy(Project $project)
    {
        return response()->json($project->delete(), 204);
    }
}
