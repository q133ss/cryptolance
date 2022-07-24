<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Project;
use App\Models\Time;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Services\FilterService;

class ProjectController extends Controller
{
    public function index(Request $request){
        $filterService = new FilterService();
        $projects = $filterService->projects($request)->paginate();
        $categories = Category::all();
        $types = Type::all();
        $times = Time::all();
        return view('projects.index', compact('projects', 'categories', 'types', 'times'));
    }

    public function single($id){
        $project = Project::find($id);
        return view('projects.single', compact('project'));
    }
}
