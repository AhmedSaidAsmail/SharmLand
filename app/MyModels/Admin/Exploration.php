<?php
namespace App\MyModels\Admin;

use Illuminate\Database\Eloquent\Model;

class Exploration extends Model {

    protected $fillable = ['item_id', 'txt', 'started_at', 'ended_at'];
    public function item() {
        $this->belongsTo('App\MyModels\Admin\Item');
    }

}