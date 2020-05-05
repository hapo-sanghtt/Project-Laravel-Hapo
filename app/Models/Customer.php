<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'gender', 'phone', 'email','address', 'member_id','project_id'
    ];
    public function projects()
    {
        return $this->hasMany('App/Models/Project');
    }
}
