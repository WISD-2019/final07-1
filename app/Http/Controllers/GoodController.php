<?php

namespace App\Http\Controllers;
use App\Good;
use App\Sort;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use phpDocumentor\Reflection\Types\Integer;

class GoodController extends Controller
{
    public function show_all(){
        $data = Good::paginate(5);
        $a=Good::all()->count();
        if(DB::table('sorts')->first()==null)
            foreach($data as $date){
                Sort::create(['price'=>$date->price,
                    'goodsname1'=>$date->goodsname1,
                    'goodsname2'=>$date->goodsname2,
                    'photo1'=>$date->photo1,
                    'photo2'=>$date->photo2,
                    'type'=>$date->type]);
            }
        else{
            DB::table('sorts')->delete();
            return redirect()->route('shop');
        }

        return view('shop', ['goods' => $data,'a'=>$a]);
    }
    public function show_longsleeve(){
        $data=Good::where('type','=','longsleeve')->paginate(5);
        $a=Good::where('type','=','longsleeve')->count();
        if(DB::table('sorts')->first()==null)
            foreach($data as $date){
            Sort::create(['price'=>$date->price,
                    'goodsname1'=>$date->goodsname1,
                    'goodsname2'=>$date->goodsname2,
                    'photo1'=>$date->photo1,
                    'photo2'=>$date->photo2,
                    'type'=>$date->type]);
        }
        else{
            DB::table('sorts')->delete();
            return redirect()->route('show_longsleeve');
        }

return view('shop',['goods' =>$data,'a'=>$a]);
    }
    public function show_shortsleeve(){
        $data=Good::where('type','=','shortsleeve')->paginate(5);
        $a=Good::where('type','=','shortsleeve')->count();
        if(DB::table('sorts')->first()==null)
            foreach($data as $date){
                Sort::create(['price'=>$date->price,
                    'goodsname1'=>$date->goodsname1,
                    'goodsname2'=>$date->goodsname2,
                    'photo1'=>$date->photo1,
                    'photo2'=>$date->photo2,
                    'type'=>$date->type]);
            }
        else{
            DB::table('sorts')->delete();
            return redirect()->route('show_shortsleeve');
        }
        return view('shop', ['goods' => $data,'a'=>$a]);
    }
    public function show_trousers(){
        $data=Good::where('type','=','trousers')->paginate(5);
        $a=Good::where('type','=','trousers')->count();
        if(DB::table('sorts')->first()==null)
            foreach($data as $date){
                Sort::create(['price'=>$date->price,
                    'goodsname1'=>$date->goodsname1,
                    'goodsname2'=>$date->goodsname2,
                    'photo1'=>$date->photo1,
                    'photo2'=>$date->photo2,
                    'type'=>$date->type]);
            }
        else{
            DB::table('sorts')->delete();
            return redirect()->route('show_trousers');
        }
        return view('shop', ['goods' => $data,'a'=>$a]);
    }
    public function show_shortpants(){
        $data=Good::where('type','=','shortpants')->paginate(5);
        $a=Good::where('type','=','shortpants')->count();
        if(DB::table('sorts')->first()==null)
            foreach($data as $date){
                Sort::create(['price'=>$date->price,
                    'goodsname1'=>$date->goodsname1,
                    'goodsname2'=>$date->goodsname2,
                    'photo1'=>$date->photo1,
                    'photo2'=>$date->photo2,
                    'type'=>$date->type]);
            }
        else{
            DB::table('sorts')->delete();
            return redirect()->route('show_shortpants');
        }
        return view('shop', ['goods' => $data,'a'=>$a]);
    }
    public function show_coat(){
        $data=Good::where('type','=','coat')->paginate(5);
        $a=Good::where('type','=','coat')->count();
        if(DB::table('sorts')->first()==null)
            foreach($data as $date){
                Sort::create(['price'=>$date->price,
                    'goodsname1'=>$date->goodsname1,
                    'goodsname2'=>$date->goodsname2,
                    'photo1'=>$date->photo1,
                    'photo2'=>$date->photo2,
                    'type'=>$date->type]);
            }
        else{
            DB::table('sorts')->delete();
            return redirect()->route('show_coat');
        }
        return view('shop', ['goods' => $data,'a'=>$a]);
    }
    public function search(Request $request){
        $search = $request->input("search");
        $show=DB::table('goods')->where('goodsname1','like','%'.$search.'%')->paginate(5);
        $a=DB::table('goods')->where('goodsname1','like','%'.$search.'%')->count();
        if(DB::table('sorts')->first()==null)
            foreach($show as $date){
                Sort::create(['price'=>$date->price,
                    'goodsname1'=>$date->goodsname1,
                    'goodsname2'=>$date->goodsname2,
                    'photo1'=>$date->photo1,
                    'photo2'=>$date->photo2,
                    'type'=>$date->type]);
            }
        else{
            DB::table('sorts')->delete();
            foreach ($show as $date){
                Sort::create(['price'=>$date->price,
                    'goodsname1'=>$date->goodsname1,
                    'goodsname2'=>$date->goodsname2,
                    'photo1'=>$date->photo1,
                    'photo2'=>$date->photo2,
                    'type'=>$date->type]);
            }
            return view('shop',['goods'=>$show,'a'=>$a]);
        }
        return view('shop', ['goods' => $show,'a'=>$a]);
    }

    public function show_DESC(Request $request){
        if($request->sorts=='DESC'){
            $date = DB::table('sorts')->orderby('price', 'desc')->paginate(5);
            $a = DB::table('sorts')->count();
            return view('shop', ['goods' => $date, 'a' => $a]);}
            else{
            $date = DB::table('sorts')->orderby('price', 'asc')->paginate(5);
            $a = DB::table('sorts')->count();
            return view('shop', ['goods' => $date, 'a' => $a]);

        }

    }



}
