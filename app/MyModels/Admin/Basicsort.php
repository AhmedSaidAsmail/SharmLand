<?php

namespace App\MyModels\Admin;

use Illuminate\Database\Eloquent\Model;

class Basicsort extends Model
{
    protected $fillable =['name','arrangement','title','status','home','keywords','description','img'];
   // protected $guarded=['name'];
    //protected $hidden=[ 'remember_token',];
   
}
