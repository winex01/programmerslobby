<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Project extends Model
{
    use Resizable; 

    // Carbon instance fields
    protected $dates = ['created_at'];

    //
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

    //QUERY SCOPE
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

    //attributes
    public function getMetaDescriptionAttribute($value)
    {
        return (empty($value)) ? $this->description : $value;
    }

    public function getSeoTitleAttribute($value)
    {
        return (empty($value)) ? $this->title : $value;
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
}
