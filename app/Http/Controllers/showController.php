<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Item_image;
use Illuminate\Http\Request;

class showController extends Controller
{





    public function index()
    {
        $items = Item::all();
        return view('malik.index' ,compact('items'));
    }




    public function categorymalik(){


        $categorys = Category::all();
        return view('malik.category' ,compact('categorys'));
    }


    public function allproduct(){
        $items = Item::all();
        return view('malik.allproduct' ,compact('items'));
    }

    public function details($id){

        $itemImage = Item_image::with('item')->where('item_id' , $id)->first();
        $itemImages = Item_image::where('item_id' , $id)->take(4)->get();
        return view('malik.details' ,compact('itemImage','itemImages'));
    }


    public function catalog(){
        return view('malik.catalog');
    }
}
