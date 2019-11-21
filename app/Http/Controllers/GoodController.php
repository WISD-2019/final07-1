<?php

namespace App\Http\Controllers;
use App\Good;
use Illuminate\Http\Request;

class GoodController extends Controller
{
    public function show_all(){
        $data = Good::paginate(5);
        return view('shop', ['goods' => $data]);
    }
    public function show_longsleeve(){
$data=Good::where('type','=','longsleeve')->paginate(5);
return view('shop',['goods' =>$data]);
    }
    public function show_shortsleeve(){
        $data=Good::where('type','=','shortsleeve')->paginate(5);
        return view('shop',['goods' =>$data]);
    }
    public function show_trousers(){
        $data=Good::where('type','=','trousers')->paginate(5);
        return view('shop',['goods' =>$data]);
    }
    public function show_shortpants(){
        $data=Good::where('type','=','shortpants')->paginate(5);
        return view('shop',['goods' =>$data]);
    }
    public function show_coat(){
        $data=Good::where('type','=','coat')->paginate(5);
        return view('shop',['goods' =>$data]);
    }

}
