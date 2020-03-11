<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use TCG\Voyager\Traits\Resizable;

class Blog extends Model
{
    //
    use Resizable;
    use HasSlug;

    protected $guarded = [];

    public $additional_attributes = ['totalViews'];

    // Carbon instance fields
    protected $dates = ['created_at'];

    // Relationship
    public function author()
    {
    	return $this->belongsTo('App\User');
    }

    public function views()
    {
        return $this->belongsToMany('App\User', 'blog_views')->withTimestamps();
    }

    // Query Scope
    public function scopePublished($query)
    {
    	return $query->where('status', 'PUBLISHED');
    }

    public function scopeUnpublished($query)
    {
    	return $query->where('status', '!=', 'PUBLISHED');
    }

    // Attributes
    public function getPublishedAtAttribute()
    {
        return $this->created_at;
    }

    public function getSubmittedByAttribute()
    {
        return $this->author->name;
    }

    public function getModifiedAtAttribute()
    {
        return $this->updated_at;
    }

    public function getTotalViewsAttribute()
    {
        return $this->views->count();
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
