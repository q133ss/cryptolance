<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::orderBy('created_at', 'DESC')->paginate();
        return view('projects.index', compact('projects'));
    }
}
