<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = "projects";

    public function members()
    {
        return $this->belongsToMany('App/Members', 'member_id', 'id');
    }

    public function customers()
    {
        return $this->belongsTo('App/Customers');
    }
}
