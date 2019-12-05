<?php

namespace App\Http\Controllers;
use Redirect;
use App\Cart;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use App\Good;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{


    public function add($id){
        if(Auth::check()){
$price=Good::where('id','=',$id)->value('price');
$goodsname1=Good::where('id','=',$id)->value('goodsname1');
$goodsname2=Good::where('id','=',$id)->value('goodsname2');
$photo1=Good::where('id','=',$id)->value('photo1');
$photo2=Good::where('id','=',$id)->value('photo2');
$type=Good::where('id','=',$id)->value('type');

$add=DB::table('carts')->insert(['price'=>$price,
    'goodsname1'=>$goodsname1,
    'goodsname2'=>$goodsname2,
    'photo1'=>$photo1,
    'photo2'=>$photo2,
    'type'=>$type,
    'user_id'=>Auth::user()->id
    ]);
        return Redirect::to(url()->previous());}
else
    return view('auth.login');


    }

    public function show(){
$date=Cart::where('user_id','=',Auth::user()->id)->get();
return view('cart',['carts'=>$date]);

    }

public function delete($id){
    Cart::destroy($id);

    return redirect()->route('cart_show');

}
}
