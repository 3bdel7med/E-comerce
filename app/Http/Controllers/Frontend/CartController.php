<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Cart;
class CartController extends Controller
{
    public function addToCart(Request $requst) {
        $product_id=$requst->product_id;

        $user_id=Auth::id();
        $cart=Cart::create([
        "product_id"=>$product_id,
        "user_id"=>$user_id,
        "qty"=>$requst->qty,
    ]);
    return redirect()->back();
}
    public function cartitems(){
        $items=Cart::where('user_id',Auth::id())->get();
        return view('frontend.cartitems', compact('items'));
}
    public function delete($id){
        $cart=Cart::find($id);
        $cart->delete($id);
        return redirect()->back();
    }

}
