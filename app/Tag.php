<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //Relationships
    public function projects()
    {
        return $this->belongsToMany('App\Project');
    }

    //Attributes
    public function getTotalCountAttribute()
    {
        return $this->count();
    }

}
