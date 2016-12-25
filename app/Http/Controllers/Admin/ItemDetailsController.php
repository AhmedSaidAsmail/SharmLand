<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyModels\Admin\Item;

class ItemDetailsController extends Controller {

    public function create(Request $request, $item) {
        $this->validate($request, [
            'detail' => 'required'
        ]);
        $Item = Item::find($item);
        return view('Admin.ItemDetailsCreate', ['Item' => $Item, 'details' => $request->detail]);
    }
    public function store(Request $request, $item) {
        $this->validate($request, [
            'detailsName' => 'required',
            'text.*'      => 'required|min:1'
        ]);
        $details            = [];
        $details['item_id'] = $item;
        $model              = "\App\MyModels\Admin\\" . ucfirst($request->detailsName);
        foreach ($request->text as $text) {
            $details['txt'] = $text;
            $model::create($details);
        }
        return redirect()->route('Items.edit', ['item' => $item]);
    }

}