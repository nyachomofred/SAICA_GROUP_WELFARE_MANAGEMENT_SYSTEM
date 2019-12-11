<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Finance extends Model
{
    //
    protected $fillable=[
        'student_id',
        'required_amount',
        'amount_to_pay',
        'amount_paid',
        'balance',
        'intake',
        'year',
        'name',
         'adm_no',
    ];

    public function student()
    {
        return $this->belongsTo('App\Model\Student');
    }

    public function setStudentIdAttribute($value)
    {
        $this->attributes['student_id']=ucwords($value);
    }

    public function setRequiredAmountAttribute($value)
    {
        $this->attributes['required_amount']=ucwords($value);
    }
    public function setAmountToPayAttribute($value)
    {
        $this->attributes['amount_to_pay']=ucwords($value);
    }
    public function setAmountPaidAttribute($value)
    {
        $this->attributes['amount_paid']=ucwords($value);
    }
    public function setBalanceAttribute($value)
    {
        $this->attributes['balance']=ucwords($value);
    }
}
