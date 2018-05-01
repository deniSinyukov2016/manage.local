<?php

namespace App\Http\Controllers;

use App\Models\Project;

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

        $projects = auth()->user()->attachProjects(request('count', 15));

        return view('pages.projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        $project->load(['comments' => function($comment) {
            $comment->with('user');
        }, 'users', 'creator', 'files']);

        return view('pages.projects.show', compact('project'));
    }

    public function update(Project $project)
    {
        return view('pages.projects.show', compact('project'));
    }

    public function destroy(Project $project)
    {
        return view('pages.projects.show', compact('project'));
    }
}
