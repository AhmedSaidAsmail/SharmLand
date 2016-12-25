<?php
namespace App\MyModels\Admin;

use Illuminate\Database\Eloquent\Model;

class Basicsort extends Model {

    protected $fillable = ['name', 'arrangement', 'title', 'status', 'home', 'keywords', 'description', 'img'];
    // protected $guarded=['name'];
    //protected $hidden=[ 'remember_token',];
    public function sorts() {
        return $this->hasMany("App\MyModels\Admin\Sort");
    }
    public function items() {
        return $this->hasManyThrough('App\MyModels\Admin\Item', 'App\MyModels\Admin\Sort');
    }
//    public function delete() {
//        $this->items()->delete();
//        $this->sorts()->delete();
//        return parent::delete();
//    }

}