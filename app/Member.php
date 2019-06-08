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
   public function children(){
       return $this->hasMany('App\Model\Children');
   }

    public function spouse(){
    return $this->hasMany('App\Model\Spouse');
   }
}