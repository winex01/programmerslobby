<?php

namespace App\Widgets;

use App\Tag;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class TagDimmer extends BaseDimmer
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
    public function run(Tag $tag)
    {
        $count = number_format($tag->totalCount);
        $string = 'Tags';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-milestone',
            'title'  => "{$count} {$string}",
            'text'   => widgetText($string,$count),
            'button' => [
                'text' => widgetButton($string),
                'link' => route('voyager.tags.index'),
            ],
            'image' => 'images/widgets/tags.jpg',
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return auth()->user()->can('browse', app(Tag::class));
    }
}
