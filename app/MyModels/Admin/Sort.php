<?php
namespace App\MyModels\Admin;

use Illuminate\Database\Eloquent\Model;
class Sort extends Model {
    protected $fillable = ['main_category', 'name', 'arrangement', 'title', 'status', 'recommended', 'keywords', 'description', 'img'];
    public function items() {
        return $this->hasMany('App\MyModels\Admin\Item');
    }
}