<?php

namespace App\Http\Controllers;

use App\Project;
use App\Traits\ProjectTrait;
use Illuminate\Http\Request;
use OpenGraph;
use SEOMeta;
use Twitter;

class ProjectController extends Controller
{
    use ProjectTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        SEOMeta::setTitle('Home');
        SEOMeta::setCanonical(url()->current());
        // desc default

        OpenGraph::setTitle('Home');
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'article');
        // desc default

        Twitter::setTitle('Home');
        // site default

        $projects = Project::published()->orderBy('created_at', 'DESC')->paginate(6);
        return view(viewIndex('projects'), compact('projects'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->published()->firstOrFail();
        $suggestedProjects = $this->suggestedProjects();

        $projectImage = url('storage/'.$project->image);
        $projectDescription = removeWhiteSpaceAndSpecialChars($project->description);

        SEOMeta::setTitle($project->title);
        SEOMeta::setDescription($projectDescription);
        SEOMeta::addMeta('article:published_time', $project->published_at->toW3CString(), 'property');
        SEOMeta::addMeta('article:section', 'Application', 'property');
        SEOMeta::addKeyword($project->meta_keywords);
        SEOMeta::addKeyword($project->tag_description->toArray());

        OpenGraph::setDescription($projectDescription);
        OpenGraph::setTitle($project->title);
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'article');

        OpenGraph::addImage($projectImage);
        // OpenGraph::addImage($projectImages->list('url'));
        OpenGraph::addImage(['url' => $projectImage, 'size' => 300]);
        OpenGraph::addImage($projectImage, ['height' => 300, 'width' => 300]);

        OpenGraph::setTitle($project->title)
            ->setDescription($projectDescription)
            ->setType('article')
            ->setArticle([
                'published_time' => $project->published_at->toW3CString(),
                'modified_time' => $project->modified_at->toW3CString(),
                'author' => $project->submittedBy,
                'section' => 'Application',
                'tag' => $project->tag_description->toArray()
        ]);

        return view(viewShow('projects'), compact('project', 'suggestedProjects'));
    }

}
