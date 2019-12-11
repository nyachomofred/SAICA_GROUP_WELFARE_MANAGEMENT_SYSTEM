<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    //
   protected $fillable=[
    'student_id',
    'certificate_name',
    'certificate_number',
    'course_name',
    'collected_date',

   ];

   public function setStudentIdAttribute($value)
    {
        $this->attributes['student_id']=ucwords($value);
    }

    public function setCertifcateNameAttribute($value)
    {
        $this->attributes['Certificate_name']=ucwords($value);
    }
    
     public function setCourseNameAttribute($value)
    {
        $this->attributes['course_name']=ucwords($value);
    }

    public function setCertificateNummberAttribute($value)
    {
        $this->attributes['certificate_number']=ucwords($value);
    }
    public function setCollectedDateAttribute($value)
    {
        $this->attributes['collected_date']=ucwords($value);
    }

    public function setStatusAttribute($value)
    {
        $this->attributes['status']=ucwords($value);
    }

   public function students()
   {
       return $this->belongsToMany('App\Model\Student');
   }

}
