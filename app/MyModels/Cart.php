<?php
namespace App\MyModels;
class Cart {
    public $items      = null;
    public $totalQty   = 0;
    public $totalPrice = 0;
    public function __construct($oldCart) {
        if (isset($oldCart)) {
            $this->items      = $oldCart->items;
            $this->totalQty   = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    public function add($item, $id) {
        if (isset($this->items) && array_key_exists($id, $this->items)) {
            // remove ex item price from total
            $this->totalPrice -= $this->items[$id]['price'];
        }
        else {
            $this->totalQty++;
        }
        $this->items[$id] = $item;
        $this->totalPrice += $item['price'];
    }
    public function remove($id) {
        if (isset($this->items) && array_key_exists($id, $this->items)) {
            $this->totalPrice -= $this->items[$id]['price'];
            $this->totalQty--;
            unset($this->items[$id]);
        }
    }
    public static function getPrice(array $prices) {
        $price = 0;
        $price += ($prices['st_no'] * $prices['st_price']);
        $price += (isset($prices['sec_no']) && isset($prices['sec_price'])) ? ($prices['sec_no'] * $prices['sec_price']) : 0;
        return $price;
    }
}