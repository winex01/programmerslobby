<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Traits\ProjectTrait;
use Illuminate\Http\Request;
use OpenGraph;
use SEOMeta;
use Twitter;

class BlogController extends Controller
{
    use ProjectTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suggestedProjects = $this->suggestedProjects();
        $blogs = Blog::published()->latest()->simplePaginate(3); //Temporary lng

        SEOMeta::setTitle('Blog');
        SEOMeta::setCanonical(url()->current());
        // desc default

        OpenGraph::setTitle('Blog');
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'article');
        // desc default

        Twitter::setTitle('Blog');
        // site default

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
        
        $image = url('storage/'.$blog->image);
        $desc = removeWhiteSpaceAndSpecialChars($blog->body);

        SEOMeta::setTitle($blog->title);
        SEOMeta::setDescription($desc);
        SEOMeta::addMeta('article:published_time', $blog->published_at->toW3CString(), 'property');
        SEOMeta::addMeta('article:section', 'Application', 'property');
        SEOMeta::addKeyword($blog->meta_keywords);

        OpenGraph::setDescription($desc);
        OpenGraph::setTitle($blog->title);
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'article');

        OpenGraph::addImage($image);
        OpenGraph::addImage(['url' => $image, 'size' => 300]);
        OpenGraph::addImage($image, ['height' => 300, 'width' => 300]);

        OpenGraph::setTitle($blog->title)
            ->setDescription($desc)
            ->setType('article')
            ->setArticle([
                'published_time' => $blog->published_at->toW3CString(),
                'modified_time' => $blog->modified_at->toW3CString(),
                'author' => $blog->submittedBy,
                'section' => 'Application',
                'tag' => $blog->meta_keywords
        ]);

        return view(viewShow('blogs'), compact('blog', 'suggestedProjects'));
    }
}
