<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;

use Illuminate\Http\Request;

class websitController extends Controller
{
    public function index()
    {
       
        return view('index')->with('categories' , Category::all())
                            // ->with('products' , Item::all())
                            ->with('first_item' , Item::orderBy('created_at','desc')->first())
                            ->with('second_item' , Item::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
                            ->with('third_item' , Item::orderBy('created_at','desc')->skip(2)->take(1)->get()->first()) 
                            ->with('fourth_item' , Item::orderBy('created_at','desc')->skip(3)->take(1)->get()->first());
                            
                            // ->with('first_category' , Category::orderBy('created_at','desc')->first())
                            // ->with('second_category' , Category::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
                            // ->with('third_category' , Category::orderBy('created_at','desc')->skip(2)->take(1)->get()->first()) 
                            // ->with('fourth_category' , Category::orderBy('created_at','desc')->skip(3)->take(1)->get()->first());
    }
}
