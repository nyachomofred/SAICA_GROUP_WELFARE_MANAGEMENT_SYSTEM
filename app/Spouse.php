<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spouse extends Model
{
    //
    protected $fillable=[
        'member_id',
        'firstname',
        'lastname',
        'gender',
        'phonenumber',
        'email',
    ];
}
