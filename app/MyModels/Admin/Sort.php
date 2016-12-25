<?php
namespace App\MyModels\Admin;

use Illuminate\Database\Eloquent\Model;

class Sort extends Model {

    protected $fillable = ['basicsort_id', 'name', 'arrangement', 'title', 'status', 'recommended', 'keywords', 'description', 'img'];
    public function basicsort() {
        return $this->belongsTo("App\MyModels\Admin\Basicsort");
    }
    public function items() {
        return $this->hasMany('App\MyModels\Admin\Item');
    }
    public function delete() {
        $this->items()->delete();
        return parent::delete();
    }

}