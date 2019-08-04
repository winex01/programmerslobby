<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use TCG\Voyager\Traits\Resizable;

class Project extends Model
{
    use Resizable, Searchable; #TODO: Queueing

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

    //--------------------------------------ALGOLIA------------------------------------
    /**
     * Get the value used to index the model.
     *
     * @return mixed
     */
    public function getScoutKey()
    {
        return $this->slug;
    }

    public function shouldBeSearchable()
    {
        return $this->published();
    }
}
