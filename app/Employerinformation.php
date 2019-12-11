<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employerinformation extends Model
{
    //
    protected $fillable=[
        'student_id',
        'employer_title',
        'employer_name',
        'company_name',
        'employer_phonenumber',
        'employer_email',
    ];
    //create  relationship between user and childrens

    public function setEmployerTitleAttribute($value)
    {
        $this->attributes['employer_title']=ucwords($value);
    }

    public function setEmNameAttribute($value)
    {
        $this->attributes['employer_name']=ucwords($value);
    }

    public function setCompanyNameAttribute($value)
    {
        $this->attributes['company_name']=ucwords($value);
    }

    public function setEmployerPhoneAttribute($value)
    {
        $this->attributes['employer_phonenumber']=ucwords($value);
    }

    public function setEmployerEmailAttribute($value)
    {
        $this->attributes['employer_email']=ucwords($value);
    }


    public function student()
    {
        return $this->belongsTo('App\Model\Student');
    }
}
