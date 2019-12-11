<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paymenthistory extends Model
{
    //
    protected $fillable=[
      
        'student_id',
        'amount_paid',
        'payment_mode',
        'reference_no',
        'date_paid',
        'receipt_no'
    ];


    public function setStudentIdAttribute($value)
    {
        $this->attributes['student_id']=ucwords($value);
    }


    public function setAmountPaidAttribute($value)
    {
        $this->attributes['amount_paid']=ucwords($value);
    }


    public function setPaymentModeAttribute($value)
    {
        $this->attributes['payment_mode']=ucwords($value);
    }


    public function setReferenceNoAttribute($value)
    {
        $this->attributes['reference_no']=strtoupper($value);
    }
    
    
    public function setReceiptNoAttribute($value)
    {
        $this->attributes['receipt_no']=strtoupper($value);
    }


    public function setDatePaiddAttribute($value)
    {
        $this->attributes['date_paid']=ucwords($value);
    }



    public function student()
    {
        return $this->belongsTo('App\Model\Student');
    }
        
}
