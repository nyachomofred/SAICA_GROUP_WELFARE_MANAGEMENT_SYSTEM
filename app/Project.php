<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $fillable=[
            'student_id',
            'project_name',
            'description',
            'documentation',
            'project_link',
            'date_uploaded',
            'status',
            'comment',
    ];

    public function setProjectNameAttribute($value)
    {
        $this->attributes['project_name']=ucwords($value);
    }

    public function setDescriptionAttribute($value)
    {
        $this->attributes['description']=ucwords($value);
    }
    public function setDocumentationAttribute($value)
    {
        $this->attributes['documentation']=ucwords($value);
    }
    public function setProjectLinkAttribute($value)
    {
        $this->attributes['project_link']=ucwords($value);
    }
    public function setDateUploadedAttribute($value)
    {
        $this->attributes['date_uploaded']=ucwords($value);
    }
    public function setStatusAttribute($value)
    {
        $this->attributes['status']=ucwords($value);
    }
    public function setCommentAttribute($value)
    {
        $this->attributes['comment']=ucwords($value);
    }

    public function student()
    {
        return $this->belongsTo('App\Model\Student');
    }
}
