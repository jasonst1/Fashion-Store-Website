<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Products $products)
    {
        return view('catalog.index', [
            'products' => $products
        ]);
    }
}
