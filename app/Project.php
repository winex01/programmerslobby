<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use TCG\Voyager\Traits\Resizable;

class Project extends Model
{
    use Resizable; 

    protected $guarded = [];

    // Carbon instance fields
    protected $dates = ['created_at'];

    // Relationship
    public function author()
    {
    	return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function views()
    {
        return $this->belongsToMany('App\User', 'project_views')->withTimestamps();
    }
    // end Relationship

    // Query Scope
    public function scopePublished($query)
    {
    	return $query->where('status', 'PUBLISHED');
    }

    public function scopeUnpublished($query)
    {
    	return $query->where('status', '!=', 'PUBLISHED');
    }

    public function getHasCodeLinkAttribute()
    {
        if($this->github_link) {
            return true;
        }

        if($this->gitlab_link) {
            return true;
        }

        if($this->sourcecode_link) {
            return true;
        }

        return false;
    }
    // end Query Scope

    // Attributes
    public function getMetaDescriptionAttribute($value)
    {
        $attr = (empty($value)) ? $this->description : $value;
        return strip_tags($attr);
    }

    public function getSeoTitleAttribute($value)
    {
        $attr = (empty($value)) ? $this->title : $value;
        return strip_tags($attr);
    }

    public function getTagDescriptionAttribute()
    {
        return $this->tags->pluck('description');
    }

    public function getPublishedAtAttribute()
    {
        return $this->created_at;
    }

    public function getModifiedAtAttribute()
    {
        return $this->updated_at;
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
