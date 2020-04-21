<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = "customers";

    public function projects()
    {
        return $this->hasMany('App/Projects', 'project_id','id');
    }
}
