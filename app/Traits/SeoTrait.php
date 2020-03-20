<?php

namespace App\Traits;

use OpenGraph;
use SEOMeta;
use Twitter;


trait SeoTrait {

    /**
     * 
     * 
     */
    public function basicSEO($title)
    {
        SEOMeta::setTitle($title);
        SEOMeta::setCanonical(url()->current());
        // desc default

        OpenGraph::setTitle($title);
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'article');
        // desc default

        Twitter::setTitle($title);
        // site default
    }

    /**
     * 
     * 
     */
    public function detailedSEO(array $data)
    {
        $image = url('storage/'.$data['image']);
        $desc = removeWhiteSpaceAndSpecialChars($data['description']);

        SEOMeta::setTitle($data['title']);
        SEOMeta::setDescription($desc);
        SEOMeta::addMeta('article:published_time', $data['published_time'], 'property');
        SEOMeta::addMeta('article:section', 'Application', 'property');
        SEOMeta::addKeyword($data['meta_keywords']);

        OpenGraph::setDescription($desc);
        OpenGraph::setTitle($data['title']);
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'article');

        OpenGraph::addImage($image);
        OpenGraph::addImage(['url' => $image, 'size' => 300]);
        OpenGraph::addImage($image, ['height' => 300, 'width' => 300]);

        OpenGraph::setTitle($data['title'])
            ->setDescription($desc)
            ->setType('article')
            ->setArticle([
                'published_time' => $data['published_time'],
                'modified_time' => $data['modified_time'],
                'author' => $data['author'],
                'section' => 'Application',
                'tag' => $data['meta_keywords']
        ]);
    }

}
