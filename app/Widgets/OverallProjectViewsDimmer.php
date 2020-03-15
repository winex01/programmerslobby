<?php

namespace App\Widgets;

use App\Project;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class OverallProjectViewsDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run(Project $project)
    {
        $count = number_format($project->overallViews);
        $string = 'Overall Project Views';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-receipt',
            'title'  => "{$count} {$string}",
            'text'   => widgetText($string,$count),
            'button' => [
                'text' => widgetButton($string),
                'link' => route('voyager.projects.index'),
            ],
            'image' => 'images/widgets/overall-project-views.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return auth()->user()->can('browse', app(Project::class));
    }
}
