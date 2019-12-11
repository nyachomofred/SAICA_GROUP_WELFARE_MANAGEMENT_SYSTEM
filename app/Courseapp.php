<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courseapp extends Model
{
    //
    protected $fillable=[
        'student_id',
        'course',
    ];
    //create  relationship between user and childrens
    public function student()
    {
        return $this->belongsTo('App\Model\Student');
    }
}
