<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    public function members()
    {
        return $this->belongsToMany('App/Member', 'member_id', 'id');
    }

    public function customers()
    {
        return $this->belongsTo('App/Customer');
    }
}
