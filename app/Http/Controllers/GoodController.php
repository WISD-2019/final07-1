<?php

namespace App\Http\Controllers;
use App\Good;
use App\Sort;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
class GoodController extends Controller
{
    public function show_all(){
        $data = Good::paginate(5);
$a=Good::all()->count();
        return view('shop', ['goods' => $data,'a'=>$a]);
    }
    public function show_longsleeve(){
$data=Good::where('type','=','longsleeve')->paginate(5);
        $a=Good::where('type','=','longsleeve')->count();
return view('shop',['goods' =>$data,'a'=>$a]);
    }
    public function show_shortsleeve(){
        $data=Good::where('type','=','shortsleeve')->paginate(5);
        $a=Good::where('type','=','shortsleeve')->count();
        return view('shop', ['goods' => $data,'a'=>$a]);
    }
    public function show_trousers(){
        $data=Good::where('type','=','trousers')->paginate(5);
        $a=Good::where('type','=','trousers')->count();
        return view('shop', ['goods' => $data,'a'=>$a]);
    }
    public function show_shortpants(){
        $data=Good::where('type','=','shortpants')->paginate(5);
        $a=Good::where('type','=','shortpants')->count();
        return view('shop', ['goods' => $data,'a'=>$a]);
    }
    public function show_coat(){
        $data=Good::where('type','=','coat')->paginate(5);
        $a=Good::where('type','=','coat')->count();
        return view('shop', ['goods' => $data,'a'=>$a]);
    }
    public function search(Request $request){
        $search = $request->input("search");
        $show=DB::table('goods')->where('goodsname1','like','%'.$search.'%')->paginate();

$a=DB::table('goods')->where('goodsname1','like','%'.$search.'%')->count();
        return view('shop', ['goods' => $show,'a'=>$a]);
    }



}
