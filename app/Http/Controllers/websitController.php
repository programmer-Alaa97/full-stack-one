<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;

use Illuminate\Http\Request;

class websitController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        $items=Item::all();
        return view('index')->with('categories' , $categories)->with('items' , $items);
        // return view('index')->with('categories' , Category::all());
                            // ->with('products' , Item::all())
                            // ->with('first_item' , Item::orderBy('created_at','desc')->first())
                            // ->with('second_item' , Item::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
                            // ->with('third_item' , Item::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
                            // ->with('fourth_item' , Item::orderBy('created_at','desc')->skip(3)->take(1)->get()->first());

                            // ->with('first_category' , Category::orderBy('created_at','desc')->first())
                            // ->with('second_category' , Category::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
                            // ->with('third_category' , Category::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
                            // ->with('fourth_category' , Category::orderBy('created_at','desc')->skip(3)->take(1)->get()->first());
    }




    // public function orderbycategory($id)
    public function show($id)
    {
        // dd($id);
        // return $this->Student->Get_Sections($id);
        // return $id;
        // return "testttttttttt";
        $categories=Category::all();
        $items=Item::all()->where('categoryID',$id);
        return view('index')->with('categories' , $categories)->with('items' , $items);
        // return view('cat_index')->with('categories' , $categories)->with('items' , $items);
        // return view('home');
    }


    // public function Show_Student($id)
    // {
    //     $Student = Student::findorfail($id);
    //     return view('pages.Students.show',compact('Student'));
    // }

    // public function orderbycategory(Item $product)
    // {
    //     return view('product.show', compact('product'));
    // }

}
