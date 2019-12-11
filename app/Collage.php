<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collage extends Model
{
    //
    protected $fillable=[
        'student_id',
        'school_name',
        'course_studied',
        'date_attended',
    ];
    //create  relationship between user and childrens

    public function setSchoolNameAttribute($value)
    {
        $this->attributes['school_name']=ucwords($value);
    }
    public function setCourseStudiedAttribute($value)
    {
        $this->attributes['Course_studied']=ucwords($value);
    }
    public function setDateAttendedAttribute($value)
    {
        $this->attributes['date_attended']=ucwords($value);
    }
    public function student()
    {
        return $this->belongsTo('App\Model\Student');
    }
}
