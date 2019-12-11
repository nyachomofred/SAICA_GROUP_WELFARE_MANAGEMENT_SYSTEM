<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsorinformation extends Model
{
    //
    
    protected $fillable=[
        'student_id',
        'sponsor',
        'sponsor_title',
        'sponsor_name',
        'sponsor_address',
        'sponsor_phonenumber',
        'sponsor_email',
    ];
    //create  relationship between user and childrens
    public function setSponsorAttribute($value)
    {
        $this->attributes['sponsor']=ucwords($value);
    }
    public function setSponsorTitleAttribute($value)
    {
        $this->attributes['sponsor_title']=ucwords($value);
    }
    public function setSponsorNameAttribute($value)
    {
        $this->attributes['sponsor_name']=ucwords($value);
    }
    public function setSponsorAddressAttribute($value)
    {
        $this->attributes['sponsor_address']=ucwords($value);
    }

    public function setSponsorPhoneAttribute($value)
    {
        $this->attributes['sponsor_phonenumber']=ucwords($value);
    }

    public function setSponsorEmailAttribute($value)
    {
        $this->attributes['sponsor_email']=ucwords($value);
    }






    public function student()
    {
        return $this->belongsTo('App\Model\Student');
    }
}
