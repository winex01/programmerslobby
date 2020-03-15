<?php

namespace App\Widgets;

use App\Blog;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class BlogDimmer extends BaseDimmer
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
        $count = number_format($blog->totalPublishedCount);
        $string = 'Published Blogs';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-treasure',
            'title'  => "{$count} {$string}",
            'text'   => widgetText($string,$count),
            'button' => [
                'text' => 'View all blogs',
                'link' => route('voyager.blogs.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
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
