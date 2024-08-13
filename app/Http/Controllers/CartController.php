<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;
use Session;

class CartController extends Controller
{

    private $product, $totalCartItem;

    public function directAddToCart($id)
    {
        $this->product = Product::find($id);
        Cart::add([
            'id'    => $id,
            'name'  => $this->product->name,
            'qty'   => 1,
            'price' =>  $this->product->selling_price,
            'options' => [
                'image' => $this->product->image,
                'category' => $this->product->category->name,
                'brand' => $this->product->brand->name
            ]
        ]);
        return redirect('/shopping-cart');
    }

    public function index(Request $request,$id){

        $this->product = Product::find($id);
        if($this->product->stock_amount < $request->qty)
        {
//            if($this->product->stock_amount < Session::get('qty') ){
//                return back()->with('message','Sorry.. you can purchase maximum Quantity is... '.$this->product->stock_amount);
//            }
            return back()->with('message','Sorry.. you can purchase maximum Quantity is... '.$this->product->stock_amount);
        }

        foreach(Cart::content() as $item)
        {
            if($item->id == $this->product->id)
            {
                $this->totalCartItem = $item->qty + $request->qty;
                if($this->product->stock_amount < $this->totalCartItem)
                {
                    return back()->with('message','Sorry.. you can purchase maximum Quantity is... '. $this->product->stock_amount - $item->qty);
                }
            }
        }



//        Session::put('qty',$request->qty);
        Cart::add([
            'id' => $id,
            'name' =>  $this->product->name,
            'qty' => $request->qty,
            'price' =>  $this->product->selling_price,
            'options' => [
                'image' => $this->product->image,
                'category' => $this->product->category->name,
                'brand' => $this->product->brand->name
            ]
        ]);

       return redirect('/shopping-cart');
    }

    public function show(){
        return view('frontEnd.cart.cart',[
            'cartProducts' => Cart::content()
        ]);
    }

    public function update(Request $request,$id){

         $this->product = Product::find($request->p_id);
        if($this->product->stock_amount < $request->qty){
            return back()->with('message','Sorry.. you can purchase maximum Quantity is... '.$this->product->stock_amount);
        }


        Cart::update($id, $request->qty);
        return back()->with('message', 'Cart Product Quantity Update Successfully');
    }

    public function delete($id){
        Cart::remove($id);
        return back()->with('message', 'Cart Product Remove Successfully  ');
    }

}
