<?php
namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MyModels\Admin\Sort;
use App\MyModels\Admin\Item;
use App\MyModels\Cart;
use Illuminate\Support\Facades\Session;
class HomeController extends Controller {
    public function welcome() {
        $Categories = Sort::where('status', 1)->get();
        return view('Web.welcome', ['Categories' => $Categories]);
    }
    public function citiesShow($city, $id) {
        $Items = Item::where('sort_id', $id)->get();
        return view('Web.citiesShow', ['Items' => $Items]);
    }
    public function tourShow($city, $tour, $id) {
        $item = Item::find($id);
        return view('Web.tourShow', ['item' => $item]);
    }
    public function addToCart($id, Request $request) {
        $this->validate($request, [
            'date'  => 'required',
            'st_no' => 'required|integer'
        ]);
        $item    = Item::find($id);
        $price   = 0;
        $oldCart = (Session::has('cart')) ? Session::get('cart') : null;
        if (isset($item->price)) {
            $price = Cart::getPrice([
                        'st_no'     => $request->st_no,
                        'st_price'  => $item->price->st_price,
                        'sec_no'    => $request->sec_no,
                        'sec_price' => $item->price->sec_price
            ]);
        }
        $itemCart = [
            'price'     => $price,
            'date'      => $request->date,
            'st_no'     => (int) $request->st_no,
            'st_price'  => $item->price->st_price,
            'sec_no'    => (int) $request->sec_no,
            'sec_price' => $item->price->sec_price
        ];
        $cart     = new Cart($oldCart);
        $cart->add($itemCart, $id);
        $request->session()->put('cart', $cart);
        return redirect()->route('home');
    }
    public function removeFromCart($id, Request $request) {
        $oldCart = (Session::has('cart')) ? Session::get('cart') : null;
        $cart    = new Cart($oldCart);
        $cart->remove($id);
        $request->session()->put('cart', $cart);
        return redirect()->route('cart');
    }
    public function cartShow() {
        $oldCart = (Session::has('cart')) ? Session::get('cart') : null;
        $cart    = new Cart($oldCart);
        return view('Web.shoping-cart', ['items' => $cart->items, 'total' => $cart->totalPrice]);
    }
}