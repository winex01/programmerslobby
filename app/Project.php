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

    //QUERY SCOPE
    public function scopePublished($query)
    {
    	return $query->where('status', 'PUBLISHED');
    }

    public function scopeUnpublished($query)
    {
    	return $query->where('status', '!=', 'PUBLISHED');
    }

}
