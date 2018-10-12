<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $fillable = ['name'];
    public function branches()
    {
        return $this->belongsToMany('App\Branch');
    }
    public function subjects()
    {
    	return $this->belongsToMany('App\Subject');
    }
}
