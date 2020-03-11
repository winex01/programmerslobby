<?php

namespace App\Http\Middleware;

use App\Blog;
use Closure;

class BlogViews
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
        $blog = Blog::select('id')->where('slug', $request->blog)->firstOrFail();
        if(auth()->user()) {
            $blog->views()->attach(auth()->user()->id);
        }else {
            $blog->views()->attach(2); //2 = guest
        }


        return $next($request);
    }
}
