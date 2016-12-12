<?php
namespace App\MyModels\Admin;

use Illuminate\Database\Eloquent\Model;
class Item extends Model {
    protected $fillable = ['sort_id', 'name', 'arrangement', 'title', 'status', 'recommended', 'keywords', 'description', 'img'];
    public function sort() {
        return $this->belongsTo('App\MyModels\Admin\Sort');
    }
    public function price() {
        return $this->hasOne('App\MyModels\Admin\Price');
    }
}