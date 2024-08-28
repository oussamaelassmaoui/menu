<?php

namespace App\Http\Controllers;


use App\Models\product;
use App\Models\Categorie;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function __construct()
    {
     
        $this->middleware(['auth','role:admin'])->except(['show']);
       
    }
    public function index()
    {
        
       
        $products=product::all();
        return view('products.index' , compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $Categories=Categorie::all();
        return view('products.create',compact('Categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
            'photo'=> 'nullable',
            'Price'=> 'required',
            'slug'=> 'required',
            'Categorie_id'=> 'required',
        ]);
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('photo','public');
            $validatedData['photo'] = $photoPath;
        }
       product::create($validatedData);

      
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $products_Types=product::all();
        $product = product::findOrFail($id);
        
        $Categories=Categorie::all();
      
        return view('products.edit', compact('product','Categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'name'=> 'required',
            'photo'=> 'nullable',
            'Price'=> 'required',
            'slug'=> 'required',
            'Categorie_id'=> 'required',
        ]);
        // Store the main photo associated with the product

        
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('products','public');
            $validatedData['photo'] = $photoPath;
        }
        
    
        $product=product::findOrFail($id);
        $product->update($validatedData);
        return to_route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        product::findOrFail($id)->delete();
        return to_route('products.index');
    }
}
