<?php

namespace App\Http\Middleware;

use Closure;

class EditProject
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
        
        if ( auth()->user()->id !== $request->project->author_id ) {
            abort(403, 'This action is unauthorized.');
        }

        return $next($request);
    }
}
