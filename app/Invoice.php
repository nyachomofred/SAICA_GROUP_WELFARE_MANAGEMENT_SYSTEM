<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $fillable=[
        'student_id',
        'account_no',
        'due_date',
    ];
    public function setStudentIdAttribute($value)
    {
        $this->attributes['student_id']=ucwords($value);
    }
    public function setAccountNoAttribute($value)
    {
        $this->attributes['account_no']=ucwords($value);
    }
    public function setDueDateAttribute($value)
    {
        $this->attributes['due_date']=ucwords($value);
    }
    public function student()
    {
        return $this->belongsTo('App\Model\Student');
    }


}
