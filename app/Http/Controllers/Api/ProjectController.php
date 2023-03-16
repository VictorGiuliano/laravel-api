<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return response()->json($projects);
    }
    public function show(string $id)
    {
        $project = Project::with('technologies')->find($id);
        if (!$project) return response(null, 404);
        return response()->json($project);
    }
}
