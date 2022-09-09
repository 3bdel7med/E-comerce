<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Cart;
use Auth;
use App\Models\Order;
use App\Models\Orderitem;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class CheckoutController extends Controller
{
    public function checkout(){
        $items=Cart::where('user_id',Auth::id())->get();
        return view('frontend.checkout')->with('items',$items);
    }

    public function makeorder(Request $request ){
        $order =new Order();
        $order->fname=$request->input('fname');
        $order->lname=$request->input('lname');
        $order->email=$request->input('email');
        $order->address=$request->input('address');
        $order->qountry=$request->input('qountry');
        $order->city=$request->input('city');
        $order->phone=$request->input('phone');

        $order->message=$request->input('message');
        $order->fname=$request->input('fname');
        $order->tracking_no='3bdelhmed'.rand(1111,9999);
        $order->save();


        $cartitems=Cart::where('user_id',Auth::id())->get();
        foreach($cartitems as $cartitem)
        {
            Orderitem::create(
                [
                    'order_id' =>  $order->id,
                    'product_id'=>$cartitem->product_id,
                    'qty'=>$cartitem->qty,
                    'price'=>$cartitem->products->selling_price,
                ]
                );
        }
        $cart=Cart::where('user_id',Auth::id())->get();
        Cart::destroy($cart);




        return redirect('/')->with('stutes','thank you your order make successfuly!!');
    }
}
