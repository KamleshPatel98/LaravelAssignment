<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home(Request $request)
    {
        $categories = Category::pluck('name','slug');
        $products = Product::with([
            'category',
            'subCategory',
            'city',
            'area',
        ])
        ->when(request('name'), function ($query) {
            $query->where('name', 'like', "%" . request('name') . "%");
        })
        ->when(request('city'), function ($query) {
            $query->where('city_id', request('city'));
        })
        ->where('status', true)
        ->latest()
        ->paginate(1);
        $cities = City::pluck('name', 'id');
        return view('website.home', compact('categories', 'products', 'cities'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)
            ->where('status', true)
            ->firstOrFail();

        $products = Product::with([
            'category',
            'subCategory',
            'city',
            'area',
        ])
        ->where('category_id', $category->id)
        ->where('status', true)
        ->latest()
        ->paginate(12);

        return view('website.product-category', compact(
            'category',
            'products'
        ));
    }

    public function products()
    {
        $products = Product::with([
            'category',
            'subCategory',
            'city',
            'area',
        ])
        ->where('status', true)
        ->latest()
        ->paginate(16);

        return view('website.products', compact('products'));
    }

    public function productShow($slug)
    {
        $product = Product::with([
            'user',
            'category',
            'subCategory',
            'country',
            'state',
            'city',
            'area',
        ])
        ->where('slug', $slug)
        ->where('status', true)
        ->firstOrFail();

        return view('website.product-show', compact('product'));
    }
}
