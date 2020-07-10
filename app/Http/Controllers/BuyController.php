<?php

namespace App\Http\Controllers;

use App\Product;
use App\Order;
use App\Cart;
use App\OrderProduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class BuyController extends Controller
{
    public function product(Request $request)
    {
        $product = Product::all();
        return view('buy')->with('products', $product);
    }

    public function buy($id)
    {
        session(['pid' => $id]);
        $product = Product::all();
        return view('buy')->with('products', $product);
    }

    public function cart($id)
    {
        // $real=Cart::find($id);
        $real = DB::table('Cart')->where('pID', $id)->first();
        // dd($real);
        $cid=Cart::all();

        if ($real!==null )
        {
            return redirect()->back()->with('success', 'your message,here');
        }
        // dd('ty');
        $new = new Cart();
        $new->pID = $id;

        $new->cID = session('user')->id;
        $new->save();
        return back();
    }
    public function showcart(Request $request)
    {
        $products = DB::table('Cart')->where('cID', session('user')->id)->get();
        $stack = array();
        $cartTotal = 0;
        foreach($products as $product)
        {
            $record = DB::table('Product')->where('id', $product->pID)->get();
            $cartTotal = $cartTotal + $record[0]->price;
            $stack[] = $record;
        }

        session(['stack'=>$stack]);
        session(['cartTotal'=>$cartTotal]);
        return view('cart',array('stack'=>$stack));
    }

    public function removecart($id)
    {
        $cart = DB::table('Cart')->where('pID', $id);
        // dd($cart);
        $cart->delete();
        return back();
    }

    public function final(Request $request)
    {
        // dd($request->totalamt);

        $order=new Order();
        $order->cID=session('user')->id;
        $order->payment=$request->pay;
        $order->totalamount=$request->totalamt ;
        $order->save();


        // dd($order->id);
        $allpros = DB::table('Cart')->where('cID', session('user')->id)->get();
        $new=new OrderProduct;

        foreach($allpros as $allpro)
        {
            $new=new OrderProduct;
            $new->pID=$allpro->pID;
            $new->oID=$order->id;
            $new->save();
        }
        $empcart = DB::table('Cart')->where('cID', session('user')->id);

        $empcart->delete();

        if($request->pay=='COD')
        {
            $all=Order::where('cID',session('user')->id)->get();
            session(['success'=>$all]);
            return view('success');
        }
        return view('onlinepayment');
    }

}
