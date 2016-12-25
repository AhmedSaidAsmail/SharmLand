<?php
namespace App\MyModels\Admin;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

    protected $fillable = ['sort_id', 'name', 'arrangement', 'title', 'status', 'recommended', 'keywords', 'description', 'img'];
    public function detail() {
        $this->hasOne('App\MyModels\Admin\Detail');
    }
    public function sort() {
        return $this->belongsTo('App\MyModels\Admin\Sort');
    }
    public function price() {
        return $this->hasOne('App\MyModels\Admin\Price');
    }
    public function exploration() {
        return $this->hasMany('App\MyModels\Admin\Exploration');
    }
    public function inclusion() {
        return $this->hasMany('App\MyModels\Admin\Inclusion');
    }
    public function exclusion() {
        return $this->hasMany('App\MyModels\Admin\Exclusion');
    }
    public function itemsgallrie() {
        return $this->hasMany('App\MyModels\Admin\Itemsgallrie');
    }
    public function additional() {
        return $this->hasMany('App\MyModels\Admin\Additional');
    }
    public function dresse() {
        return $this->hasMany('App\MyModels\Admin\Dresse');
    }
    public function note() {
        return $this->hasMany('App\MyModels\Admin\Note');
    }

}