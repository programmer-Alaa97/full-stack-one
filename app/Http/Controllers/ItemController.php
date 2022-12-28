<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

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
        // return view('product.create');
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
        ]);

        // $product = Item::create($request->all());

        //when enable the login and auth
        // $request['userID']=0;
        Item::create([
            'name' => $request->name,
            'price' => $request->price,
            'categoryID' => $request->categoryID,
            // 'userID'=>0, //temprary commed from here and from the model for testing and the migration
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
    public function show(Item $item)
    {
        return view('item.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
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
    public function update(Request $request, Item $item)
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
    public function destroy(Item $item)
    {

        $product->delete();
        return redirect()->route('products.index')
            ->with('success', 'product deleted successflly');
    }
}
