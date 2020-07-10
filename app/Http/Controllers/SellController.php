<?php

namespace App\Http\Controllers;

use App\Sell;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SellController extends Controller
{
    public function sell(Request $request)
    {
        $var=session('user');
        $new=new Sell();
        $new->cID=$var->id;
        $new->productname=$request->prodname;
        $new->quantity=$request->quantity;
        $new->desc=$request->desc;

        $file = $request->file('image');
         $contents = $file->openFile()->fread($file->getSize());
        $new->image=$contents;
        $new->status='PENDING';
        $new->save();

        $user = DB::table('Sell')->where('cID',$var->id)->get();
        return view('sell')->with('selldatas',$user) ;
    }
    public function status(Request $request)
    {
        $var=session('user');
        $user = DB::table('Sell')->where('cID',$var->id)->get();
        return view('status')->with('selldatas',$user) ;
    }
}
