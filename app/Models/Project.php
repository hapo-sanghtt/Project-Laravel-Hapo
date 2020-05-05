<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description', 'status', 'time_estime','start_date', 'end_date','member_id','customer_id',
    ];
    public function members()
    {
        return $this->belongsToMany('App/Member', 'member_id', 'id');
    }

    public function customers()
    {
        return $this->belongsTo('App/Customer');
    }
}
