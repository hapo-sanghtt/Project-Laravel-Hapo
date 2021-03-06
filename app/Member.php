<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Member extends Authenticatable
{
    use Notifiable;
    protected $guard = 'member';
    const ADMIN = 'admin';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image', 'name','gender', 'email','phone','address', 'password', 'role', 'project_id',
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
    public function tasks()
    {
        return $this->hasMany('App/Models/Task');
    }
    public function projects()
    {
        return $this->belongsToMany('App/Models/Project');
    }
    public function members()
    {
        return $this->belongsToMany('App/Member', 'member_project', 'members_id', 'projects_id');
    }
}
