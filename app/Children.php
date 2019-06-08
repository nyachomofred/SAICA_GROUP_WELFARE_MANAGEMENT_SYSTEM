<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    //
    protected $fillable=[
        'firstname',
        'lastname',
        'gender',
        'member_id',
        'gender',
        'age',
        'birth_certificate_no',
    ];
    //create  relationship between user and childrens
    public function user()
    {
        return $this->belongsTo('App\Model\Member');
    }
}
