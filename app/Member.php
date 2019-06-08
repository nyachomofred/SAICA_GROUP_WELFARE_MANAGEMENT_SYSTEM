<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //fillable fields
    protected $fillable=[
        'firstname',
        'lastname',
        'email',
        'phonenumber',
        'gender',
        'id_no',
    ];

    public function setFirstNameAttribute($value)
    {
        $this->attributes['firstname']=ucfirst($value);
    }

    public function setLastNameAttribute($value)
    {
        $this->attributes['lastname']=ucfirst($value);
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['email']=ucfirst($value);
    }

    public function setGenderAttribute($value)
    {
        $this->attributes['gender']=ucfirst($value);
    }

   public function children()
   {

       return $this->hasMany('App\Model\Children');
   }

    public function spouse()
    {
    return $this->hasMany('App\Model\Spouse');
   }
}