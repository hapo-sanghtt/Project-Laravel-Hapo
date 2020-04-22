<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function projects()
    {
        return $this->belongsToMany('App/Project', 'project_id', 'id');
    }

    public function tasks()
    {
        return $this->hasMany('App/Task');
    }
}
