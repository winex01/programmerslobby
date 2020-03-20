<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Traits\ProjectTrait;
use App\Traits\SeoTrait;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    use ProjectTrait;
    use SeoTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->basicSEO('Blog');

        $suggestedProjects = $this->suggestedProjects();
        $blogs = Blog::published()->latest()->simplePaginate(3); //Temporary lng

        return view(viewIndex('blogs'), compact('blogs', 'suggestedProjects'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->published()->firstOrFail();
        $suggestedProjects = $this->suggestedProjects();
        
        $this->detailedSEO([
            'image' => $blog->image,
            'description' => $blog->body,
            'title' => $blog->title,
            'published_time' => $blog->published_at->toW3CString(),
            'modified_time' => $blog->modified_at->toW3CString(),
            'meta_keywords' => $blog->meta_keywords,
            'author' => $blog->submittedBy,
        ]);


        return view(viewShow('blogs'), compact('blog', 'suggestedProjects'));
    }
}
