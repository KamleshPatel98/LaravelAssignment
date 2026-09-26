<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $records = Product::with([
            'category:id,name',
            'subCategory:id,name',
            'country:id,name',
            'state:id,name',
            'city:id,name',
            'area:id,name',
        ])
        ->when($request->name !== null, function($q) use ($request){
            $q->where('name', 'like', '%' . $request->name . '%');
        })
        ->when($request->status !== null, function($q) use ($request){
            $q->where('status', $request->status);
        })
        ->latest()->paginate(10);

        return view('panel.products.index', compact('records'));
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
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
