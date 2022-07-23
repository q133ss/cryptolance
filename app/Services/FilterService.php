<?php
namespace App\Services;

use App\Models\Project;
use Illuminate\Http\Request;


class FilterService{
    public function projects(Request $request)
    {
        $projectsQuery = Project::query();
        $projectsQuery->orderBy('created_at', 'ASC');

        if($request->filled('category')){
            $projectsQuery->whereIn('category_id', $request->category);
        }

        if($request->filled('type')){
            if($request->type != 0) {
                $projectsQuery->where('type_id', $request->type);
            }
        }

        if($request->filled('price_from')){
            $projectsQuery->where('price', '>=', $request->price_from);
        }

        if($request->filled('price_to')){
            $projectsQuery->where('price', '<=', $request->price_to);
        }

        if($request->filled('time')){
            $projectsQuery->whereIn('time_id', $request->time);
        }

        if($request->filled('search')){
            $projectsQuery->where('title', 'LIKE', "%{$request->search}%")->orWhere('content', 'LIKE', "%{$request->search}%");
        }

        return $projectsQuery;
    }
}
