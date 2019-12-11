<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable=[
        'course_period',
        'self_sponsered',
        'student_id',
        'full_name',
        'date_of_birth',
        'id_no',
        'gender_gender',

        'email',
        'phonenumber',
        'alternate_phonenumber',

        'citizenship',
        'gender',
        'future_career',

        'physical_address',
        'religion',
        'medical_condition',

        'campus',
        'intake',
        'level',
        'status',
        'photo',
        
        'sponsor',
        'sponsor_title',
        'sponsor_name',
        'sponsor_address',
        'sponsor_phonenumber',
        'sponsor_email',
        
        'employer_title',
        'employer_name',
        'company_name',
        'employer_phonenumber',
        'employer_email',
        
        'school_name',
        'type_of_school',
        'school_address',
        'location',
        'year_of_completion',
        'enrolled_in_school',
        
        'school_attended',
        'course_studied',
        'date_attended',
        
        'day',
        'month',
        'year',
    ];
    
    public function setCoursePeriodAttribute($value)
    {
        $this->attributes['course_period']=ucwords($value);
    }

    public function setSelfSponseredAttribute($value)
    {
        $this->attributes['self_sponsered']=ucwords($value);
    }

    public function setStudentIdAttribute($value)
    {
        $this->attributes['student_id']=ucwords($value);
    }
    public function setFullNameAttribute($value)
    {
        $this->attributes['full_name']=ucwords($value);
    }

    public function setDateBirthdAttribute($value)
    {
        $this->attributes['date_of_birth']=ucwords($value);
    }

    public function setIdNoAttribute($value)
    {
        $this->attributes['id_no']=ucwords($value);
    }

    public function setGenderAttribute($value)
    {
        $this->attributes['gender_gender']=ucwords($value);
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['email']=ucwords($value);
    }

    public function setPhonenumberAttribute($value)
    {
        $this->attributes['phonenumber']=ucwords($value);
    }

    public function setAltPhoneAttribute($value)
    {
        $this->attributes['alternate_phonenumber']=ucwords($value);

    }

    public function setCitizenshipAttribute($value)
    {
        $this->attributes['citizenship']=ucwords($value);
    }

    public function setGenderGenderAttribute($value)
    {
        $this->attributes['gender']=ucwords($value);
    }
    public function setFutureCareerAttribute($value)
    {
        $this->attributes['future_career']=ucwords($value);
    }
    public function setPhysicalAddressAttribute($value)
    {
        $this->attributes['physical_address']=ucwords($value);
    }

    public function setReligionAttribute($value)
    {
        $this->attributes['religion']=ucwords($value);
    }

    public function setMedicalConditionAttribute($value)
    {
        $this->attributes['medical_condition']=ucwords($value);
    }

    public function setCampusAttribute($value)
    {
        $this->attributes['campus']=ucwords($value);
    }

    public function setIntakeAttribute($value)
    {
        $this->attributes['intake']=ucwords($value);
    }
    public function setLevelAttribute($value)
    {
        $this->attributes['level']=ucwords($value);
    }
    public function setStatusAttribute($value)
    {
        $this->attributes['status']=ucwords($value);
    }



    public function collage()
    {
 
        return $this->hasMany('App\Model\Collage');
    }
 
     public function courseapp()
     {

     return $this->hasMany('App\Model\Courseapp');

     }

     public function employerinfo()
     {

     return $this->hasMany('App\Model\Employerinformation');
     
     }

     public function sponsorinfo()
     {

     return $this->hasMany('App\Model\Sponsorinformation');
     
     }

     public function certificate()
     {

     return $this->hasMany('App\Model\Certificate');
     
     }
     
     public function academicinfo()
     {

     return $this->hasMany('App\Model\Academicinformation');
     
     }

     public function courses()
    {
        return $this->belongsToMany('App\Model\Course');
    }
}
