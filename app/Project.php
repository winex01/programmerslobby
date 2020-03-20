<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use TCG\Voyager\Traits\Resizable;

class Project extends Model
{
    use Resizable;
    use HasSlug;

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

    public function scopePending($query)
    {
        return $query->where('status', 'PENDING');
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

    public function getSubmittedByAttribute($value)
    {
        return $this->coded_by ?? $this->author->name;
    }

    public function getTotalViewsAttribute()
    {
        return $this->views->count(); // TODO: how to add parameter in attribute, number_format
    }

    public function getTotalCountAttribute()
    {
        return $this->count();
    }

    public function getTotalPublishedCountAttribute()
    {
        return $this->published()->count();
    }

    public function getTotalPendingCountAttribute()
    {
        return $this->pending()->count();
    }

    public function getPublishedDateAttribute()
    {
        return $this->created_at->toFormattedDateString();
    }

    public function getOverallViewsAttribute()
    {   
        $total = 0;
        foreach ($this->all() as $temp) {
            $total += $temp->totalViews;
        }
        return $total;
    }

    public function getRepositoryAttribute()
    {
        if ($this->sourcecode_link) {
            return $this->sourcecode_link;
        }

        if ($this->gitlab_link) {
            return $this->gitlab_link;
        }

        if ($this->github_link) {
            return $this->github_link;
        }

        if ($this->download_link) {
            return $this->download_link;
        }

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
