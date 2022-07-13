<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Services\FilterService;

class ProjectController extends Controller
{
    public function index(Request $request){

        $filterService = new FilterService();
        $projects = $filterService->projects($request)->paginate();
        return view('projects.index', compact('projects'));
    }
}
