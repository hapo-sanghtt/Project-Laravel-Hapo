<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = "members";

    public function projects()
    {
        return $this->belongsToMany('App/Projects', 'project_id', 'id');
    }

    public function tasks()
    {
        return $this->hasMany('App/Tasks');
    }
}
