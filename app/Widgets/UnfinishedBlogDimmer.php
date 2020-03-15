<?php

namespace App\Widgets;

use App\Blog;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class UnfinishedBlogDimmer extends BaseDimmer
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
    public function run(Blog $blog)
    {
        $count = number_format($blog->totalUnfinishedCount);
        $string = 'Unfinished Blogs';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-dot-3',
            'title'  => "{$count} {$string}",
            'text'   => widgetText($string,$count),
            'button' => [
                'text' => widgetButton($string),
                'link' => route('voyager.blogs.index'),
            ],
            'image' => 'images/widgets/unfinished-blogs.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return auth()->user()->can('browse', app(Blog::class));
    }
}
