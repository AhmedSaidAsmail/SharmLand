<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyModels\Admin\Price;
class PricesController extends Controller {
    public function addPrice(Request $request, $id) {
        $this->validate($request, [
            'item'      => 'required|integer',
            'st_name'   => 'required',
            'st_price'  => 'required|integer',
            'sec_price' => 'integer'
        ]);
        try {
            Price::create($request->all());
        }
        catch (\Exception $e) {
            return redirect()->route('updateItem', ['id' => $id])->with('error', $e->getMessage());
        }
        return redirect()->route('updateItem', ['id' => $id]);
    }

}