<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return response()->json(["data" => $projects], 200);
    }

    public function show($url)
    {
        // Find project by ID
        $project = Project::where('url', $url)->first();

        // If not found, return a 404 response
        if (!$project) {
            return response()->json(['message' => 'Project not found'], 404);
        }

        // Return the project as JSON
        return response()->json(["data" => $project], 200);
    }
}
