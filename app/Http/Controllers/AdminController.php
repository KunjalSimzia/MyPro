<?php

namespace App\Http\Controllers;

use App\Product;
use App\Sell;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function requests(Request $request)
    {
        $user = Sell::all();
        return view('admin.request')->with('requests',$user) ;
    }

    public function approve($id)
    {
        $userData = Sell::find($id);
        $userData->status='APPROVED';
        // dd($userData->status);
        $userData->save();
        return back();
    }
    public function disapprove($id)
    {

        $userData = Sell::find($id);
        $userData->status='DISAPPROVED';
        // dd($userData->status);
        $userData->save();
        return back();
    }

    public function add(Request $request)
    {
        $new=new Product();
        $new->productname=$request->productname;
        $new->desc=$request->desc;
        $new->price=$request->price;
       // dd($request->file('image')."this is file image" );
        $file = $request->file('image');
        $contents = $file->openFile()->fread($file->getSize());
        $new->image=$contents;
        $new->save();
        return back();
    }
    public function products(Request $request)
    {
        $user = Product::all();
        return view('admin.remove')->with('products',$user) ;
    }
    public function removeProduct($id)
    {
        $remove=Product::find($id)->delete();
        return back();
    }
}
