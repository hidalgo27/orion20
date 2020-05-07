<?php

namespace App\Http\Controllers;

use App\Product;
use App\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function category(Product $product){

        return view('page.products');
    }
    public function cart($id){
        return view('page.cart');
    }
    public function detail($id){
        return view('page.detail');
    }
    public function checkout($id){
        return view('page.checkout');
    }
    public function checkout_address($id){
        return view('page.checkout-address');
    }
    public function checkout_payment($id){
        return view('page.checkout-payment');
    }
    public function store(Request $request)
    {
        //
        $params = $request->all();
        $product = Purchase::find($params['product']);
        dd($product);
        // from the guide
//        $res0 = new BillplzBill;
//        $res0->collection_id = $product->payment_link;
//        $res0->description = "New BIll";
//        $res0->email = Auth::user()->email;
//        $res0->name = Auth::user()->name;
//        $res0->amount = $product->price*100;
//        $res0->callback_url = "yourwebsite@example.com";
//        // and other optional params
//        $res0 = $res0->create_bill();
//        list($rhead ,$rbody, $rurl) = explode("\n\r\n", $res0);
//        $bplz_result = json_decode($rurl);

        // Store the bill into our purchases
        $purchase = new Purchase;
        $purchase->user_id = Auth::user()->id;
        $purchase->product_id = $product->id;
        $purchase->bill_id = 1;
        $purchase->save();
        return "ok";
    }

}
