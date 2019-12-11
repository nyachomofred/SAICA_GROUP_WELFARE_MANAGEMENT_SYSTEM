<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable=[
        'name',
        'level',
        'duration',
        'description',
    ];
    public function setNameAttribute($value)
    {
        $this->attributes['name']=ucwords($value);
    }

    public function setLastLevelAttribute($value)
    {
        $this->attributes['level']=ucwords($value);
    }

    public function setDescriptionAttribute($value)
    {
        $this->attributes['description']=ucwords($value);
    }

    public function setDurationAttribute($value)
    {
        $this->attributes['duration']=ucwords($value);
    }

    public function students()
    {
        return $this->belongsToMany('App\Model\Student');
    }
}
