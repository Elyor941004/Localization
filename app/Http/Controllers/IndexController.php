<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $products = Products::all();
        return view('index', ['products'=>$products]);
    }

    public function store(Request $request){
        $model = new Products();
        $model->name = ['en'=>$request->name_en, 'ru'=>$request->name_ru, 'uz'=>$request->name_uz];
        $model->price = ['en'=>$request->price_en, 'ru'=>$request->price_ru, 'uz'=>$request->price_uz] ;
        $model->quantity = ['en'=>$request->quantity_en, 'ru'=>$request->quantity_ru, 'uz'=>$request->quantity_uz] ;
        $model->save();
        return redirect()->route('index', app()->getLocale())->with('status', __('main.Successfully saved'));
    }

}
