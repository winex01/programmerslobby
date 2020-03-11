<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Relationship
    public function viewedProjects()
    {
        return $this->belongsToMany('App\Project', 'project_views')->withTimestamps();
    }

    public function viewedBlogs()
    {
        return $this->belongsToMany('App\Project', 'blog_views')->withTimestamps();
    }

    public function providers()
    {
        return $this->belongsToMany('App\Provider')->withTimestamps();
    }

    public function projects()
    {
        return $this->hasMany('App\Project', 'author_id');
    }
}
