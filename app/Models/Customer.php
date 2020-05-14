<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
       'image', 'name', 'gender', 'phone', 'email','address','project_id'
    ];
    public function projects()
    {
        return $this->hasMany('App/Models/Project');
    }
}
