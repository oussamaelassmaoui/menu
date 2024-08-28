<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Categorie;
use Illuminate\Http\Request;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=product::all();
        $Categories=Categorie::all();
            return view('menus.index' , compact('products','Categories') );
    }
    public function filter(Request $request , string $id)
    {
        $category = Categorie::findOrfail($id);
        $products =  $category->product()->get();
        $Categories=Categorie::all();

       return view('menus.filter', compact('category','products', 'Categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
