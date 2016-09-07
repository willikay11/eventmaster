<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{

    protected $fillable = [
        'user_id','name', 'reason', 'location',
    ];


    public function owner()
    {
        return $this->belongsTo('App\User','id');
//        return User::where('id', $this->user_id)->first()->name;
    }
}