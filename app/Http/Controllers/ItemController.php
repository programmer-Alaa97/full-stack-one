<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Item::latest()->paginate(4);
        return view('product.index', compact('products'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catgories = Category::all();
        return view('product.create', compact('catgories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'categoryID' => 'required',
            'photo' => 'required|image'

        ]);


        $photo = $request->photo;
        $photo_new_name = time().$photo->getClientOriginalName();
        $photo->move('uploads/image',$photo_new_name);

        Item::create([
            'name' => $request->name,
            'price' => $request->price,
            'categoryID' => $request->categoryID,
            'photo' => 'uploads/image/'.$photo_new_name,
            'userID' => Auth()->user()->id

        ]);
        return redirect()->route('products.index')
            ->with('success', 'product added successflly');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'detail' => 'required'
        ]);

        $product->update($request->all());
        return redirect()->route('products.index')
            ->with('success', 'product updated successflly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $product)
    {

        $product->delete();
        return redirect()->route('products.index')
            ->with('success', 'product deleted successflly');
    }
}
