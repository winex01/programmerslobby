<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use TCG\Voyager\Traits\Resizable;

class Blog extends Model // TODO: refactor this code and remove unnecessary attribute including other Model classes
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

    public function scopePending($query)
    {
        return $query->where('status', 'PENDING');
    }

    public function scopeUnfinished($query)
    {
        return $query->where('status', '!=', 'REJECT')
        ->unpublished();
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

    public function getTotalUnfinishedCountAttribute()
    {
        return $this->unfinished()->count();
    }

    public function getPublishedDateAttribute()
    {
        return $this->created_at->toDayDateTimeString();
    }

    public function getOverallViewsAttribute() // TODO: remove this shit and transfer it to class repository
    {   
        $total = 0;
        foreach ($this->all() as $temp) {
            $total += $temp->totalViews;
        }
        return $total;
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
