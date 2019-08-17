<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use SEOMeta;
use OpenGraph;
use Twitter;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        SEOMeta::setTitle('Home');
        SEOMeta::setCanonical('http://programmerslobby.com/');
        // desc default

        OpenGraph::setTitle('Home');
        OpenGraph::setUrl('http://programmerslobby.com/');
        OpenGraph::addProperty('type', 'article');
        // desc default

        Twitter::setTitle('Homepage');
        // site default

        $projects = Project::published()->orderBy('created_at', 'DESC')->paginate(9);
        return view('index', compact('projects'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->published()->first();
        $suggestedProject = Project::select('slug', 'title', 'image')
                                    ->where('slug', '!=', $slug)
                                    ->inRandomOrder()
                                    ->limit(6)->get();

        SEOMeta::setTitle($project->seo_title);
        SEOMeta::setDescription($project->meta_description);
        SEOMeta::addMeta('article:published_time', $project->published_at->toW3CString(), 'property');
        SEOMeta::addMeta('article:section', 'Application', 'property');
        SEOMeta::addKeyword($project->tag_description->toArray());

        OpenGraph::setDescription($project->meta_description);
        OpenGraph::setTitle($project->seo_title);
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'article');

        OpenGraph::addImage($project->image);
        // OpenGraph::addImage($project->images->list('url'));
        OpenGraph::addImage(['url' => $project->image, 'size' => 300]);
        OpenGraph::addImage($project->image, ['height' => 300, 'width' => 300]);

        OpenGraph::setTitle($project->seo_title)
            ->setDescription($project->meta_description)
            ->setType('article')
            ->setArticle([
                'published_time' => $project->published_at->toW3CString(),
                'modified_time' => $project->modified_at->toW3CString(),
                'author' => $project->author->name, 
                'section' => 'Application',
                'tag' => $project->tag_description->toArray()
        ]);
            
        return view('project', compact('project', 'suggestedProject'));
    }

}
