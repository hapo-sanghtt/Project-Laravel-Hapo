<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'name', 'description', 'status', 'member_id','project_id',
    ];
    public function members()
    {
        return $this->belongsto('App/Member');
    }
}
