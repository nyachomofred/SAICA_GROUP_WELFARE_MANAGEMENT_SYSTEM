<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    //
    protected $fillable=[
        'name',
        'location',
    ];

    public function setNameAttribute($value)
    {
       $this->attributes['name']=ucwords($value);
    }

    public function setLocationAttribute($value)
    {
       $this->attributes['location']=ucwords($value);
    }
}
