<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academicinformation extends Model
{
    //
    protected $fillable=[
        'student_id',
        'school_name',
        'type_of_school',
        'school_address',
        'location',
        'year_of_completion',
        'enrolled_in_school',
    ];
    //create  relationship between user and childrens

    public function setSchoolNameAttribute($value)
    {
        $this->attributes['school_name']=ucwords($value);
    }

    public function setTypeOfSchoolAttribute($value)
    {
        $this->attributes['type_of_school']=ucwords($value);
    }
    public function setSchoolAddressAttribute($value)
    {
        $this->attributes['school_address']=ucwords($value);
    }
    public function setLocationAttribute($value)
    {
        $this->attributes['location']=ucwords($value);
    }
    public function setYearOfCompletionAttribute($value)
    {
        $this->attributes['year_of_completion']=ucwords($value);
    }
    public function setEnrolledInSchoolAttribute($value)
    {
        $this->attributes['enrolled_in_school']=ucwords($value);
    }


    public function student()
    {
        return $this->belongsTo('App\Model\Student');
    }
}
