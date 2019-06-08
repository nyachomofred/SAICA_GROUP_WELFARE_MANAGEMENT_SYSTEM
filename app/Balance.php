<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
       
 protected $fillable=[
        'balance',
 ];

 public function member(){
    return $this->belongsTo('App\Model\Member');
 }

}
 