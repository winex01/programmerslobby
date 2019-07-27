<?php

namespace App\Http\Middleware;

use App\Project;
use App\User;
use Closure;

class IncrementProjectViews
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

        $project = Project::select('id')->where('slug', $request->project)->firstOrFail();
        if(auth()->user()) {
            $project->views()->attach(auth()->user()->id);
        }else {
            $project->views()->attach(3); //3 = guest
        }


        return $next($request);
    }
}
