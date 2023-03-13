<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Category;
use App\Models\Products;
use App\Models\Review;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        return view('catalog.index', [
            'products' => Products::all(),
            'categories' => Categories::all(),
        ]);
    }

    public function category(string $CategoryName)
    {
        $Category = Categories::where('CategoryName', '=', $CategoryName)->get();
        $CategoryID = $Category[0]->CategoryID;

        return view('catalog.index', [
            'products' => Products::where('categoryID', '=', $CategoryID)->get(),
            'categories' => Categories::all(),
        ]);
    }

    public function show(Products $product)
    {
        return view('catalog.show', [
            'product' => $product,
            'reviews' => Review::where('ProductID', $product->ProductID)->get()
        ]);
    }
}
