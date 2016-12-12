<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyModels\Admin\Item;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Admin\UploadImageController;
use Illuminate\Support\Facades\Session;
class ItemsController extends Controller {
    public function show() {
        $Items = Item::all();
        return view('Admin.Items', ['Items' => $Items, 'activeItems' => 1]);
    }
    public function store(Request $request) {
        $this->validate($request, ['name'        => 'required',
            'sort_id'    => 'required',
            'title'       => 'required',
            'arrangement' => 'integer',
            'img'         => 'image']);
        $Item = $request->all();
        if ($request->hasFile('img')) {
            $file        = Input::file('img');
            $Item['img'] = UploadImageController::Upload($file, "/images/items/", 250);
        }
        try {
            Item::create($Item);
        }
        catch (\Exception $e) {
            $request->session()->flash('addStatus', $e->getMessage()." !!alreted ");
        }


        return redirect(route('Items'));
    }
    public function update($id) {
        $item = Item::find($id);
        return view('Admin.ItemUpdate', ['Item' => $item, 'activeItems' => 1]);
    }
    public function edit($id, Request $request) {
        $this->validate($request, ['name'        => 'required',
            'category'    => 'required',
            'title'       => 'required',
            'arrangement' => 'integer',
            'img'         => 'image']);
        $Item   = $request->all();
        $target = Item::find($id);
        if ($request->hasFile('img')) {
            $file        = Input::file('img');
            $Item['img'] = UploadImageController::Upload($file, "/images/items/", 250);
        }
        $target->update($Item);
        return redirect(route('Items'));
    }
    public function delete($id) {
        $target = Item::find($id);
        $target->delete();
        Session::flash('deleteStatus', "Item No: {$id} is Deleted !!");
        return redirect(route('Items'));
    }
}