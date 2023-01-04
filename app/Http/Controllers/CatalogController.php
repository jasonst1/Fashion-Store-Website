<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        return view('catalog.index', [
            'products' => Products::all()
        ]);
    }

    public function category(string $CategoryName)
    {
        $Category = Categories::where('CategoryName', '=', $CategoryName)->get();
        $CategoryID = $Category[0]->CategoryID;

        return view('catalog.index', [
            'products' => Products::where('categoryID', '=', $CategoryID)->get()
        ]);
    }
}
