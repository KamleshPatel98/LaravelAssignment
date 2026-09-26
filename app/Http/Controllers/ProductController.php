<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Product;
use App\Models\State;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
        $categories = Category::select('id','name')->where('status', true)
            ->orderBy('name')
            ->get();

        $countries = Country::select('id','name')->where('status', true)
            ->orderBy('name')
            ->get();

        return view('panel.products.create', compact(
            'categories',
            'countries'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'detail' => 'nullable|string',

            'category_id' => 'required|exists:categories,id',
            'sub_category_id' => 'required|exists:sub_categories,id',

            'country_id' => 'required|exists:countries,id',
            'state_id' => 'required|exists:states,id',
            'city_id' => 'required|exists:cities,id',
            'area_id' => 'required|exists:areas,id',

            'price' => 'nullable|numeric|min:0',
        ]);

        $product = Product::create([
            'name' => $request->name,
            'detail' => $request->detail,
            'slug' => $request->name,

            'user_id' => Auth::id(),

            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,

            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'city_id' => $request->city_id,
            'area_id' => $request->area_id,

            'price' => $request->price,
            'status' => true,
        ]);

        // OLX style slug
        $product->update([
            'slug' => Str::slug(
                $product->name .
                '-in-' .
                $product->area->name .
                '-' .
                $product->city->name .
                '-iid-' .
                $product->id
            ),
        ]);

        return to_route('products.index')
            ->with('success', 'Product created successfully.');
        
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
        $product->delete();
        return back()->with('success', 'Deleted successfully!');
    }

    public function getSubCategories($category)
    {
        $subCategories = SubCategory::where('category_id', $category)
            ->where('status', true)
            ->orderBy('name')
            ->get(['id', 'name']);

        return response()->json($subCategories);
    }

    public function getStates($country)
    {
        $states = State::where('country_id', $country)
            ->where('status', true)
            ->orderBy('name')
            ->get(['id', 'name']);

        return response()->json($states);
    }

    public function getCities($state)
    {
        $cities = City::where('state_id', $state)
            ->where('status', true)
            ->orderBy('name')
            ->get(['id', 'name']);

        return response()->json($cities);
    }

    public function getAreas($city)
    {
        $areas = Area::where('city_id', $city)
            ->where('status', true)
            ->orderBy('name')
            ->get(['id', 'name']);

        return response()->json($areas);
    }

}
