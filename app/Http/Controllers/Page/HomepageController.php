<?php

namespace App\Http\Controllers\Page;

use App\Product;
use Darryldecode\Cart\CartCondition;
use Darryldecode\Cart\Facades\CartFacade;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  CartFacade::getContent();
        $cartTotalQuantity = CartFacade::getTotalQuantity();
        $subTotal = CartFacade::getSubTotal();
        $total = CartFacade::getTotal();
        $data_count = $data->count();

//        $condition = CartFacade::getCondition('VAT 12.5%');
//        $conditionCalculatedValue = $condition->getCalculatedValue($subTotal);
//        broadcast(new AddCartEvent($data))->toOthers();
        return view('page.home', compact('data','cartTotalQuantity','subTotal','total','data_count'));
//        return view('page.home');
    }
    public function cart(){

        return CartFacade::getContent();
//        return view ('page.cart', compact('data'));
    }

    public function add(Request $request){
        $condition1 = new cartCondition(array(
            'name' => 'VAT 12.5%',
            'type' => 'tax',
            'target' => 'subtotal', // this condition will be applied to cart's subtotal when getSubTotal() is called.
            'value' => '12.5%',

        ));

        $data = CartFacade::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'conditions' => $condition1
        ]);

        $datos = CartFacade::getContent($request->id);

        return response()->json([
            'dataAdd' => $datos
        ]);
    }
    public function destroy($id)
    {
        CartFacade::remove($id);
        return "ok";
//        $nota = CartFacade::find($id);
//        $nota->delete();
    }
}
