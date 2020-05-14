<?php

namespace App\Http\Middleware;

use App\Project;
use Closure;

class ProjectBookmark
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $project = Project::findOrFail($request->project);
        $project->toggleFavorite(); // auth user added to bookmark this project

        return $next($request);
    }
}
