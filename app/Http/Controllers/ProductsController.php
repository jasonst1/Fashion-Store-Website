<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("catalog.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        $rule = [
            'ProductName' => 'required|string',
            'ProductSummary' => 'required|string',
            'ProductPrice' => 'required|numeric',
            'ProductQuantity' => 'required|numeric',
            'ProductDiscount' => 'numeric'
        ];

        $validatedData = $request->validate($rule);

        // return $validatedData;

        $validatedData['ProductID'] = IdGenerator::generate([
            'table' => 'products',
            'field' => 'ProductID',
            'length' => 6,
            'prefix' => 'PR'
        ]);

        Products::create($validatedData);

        return redirect('/catalog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $catalog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $catalog)
    {
        return $catalog;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductsRequest  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request, Products $catalog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $catalog)
    {
        Products::where('ProductID', $catalog->ProductID)->delete();

        return redirect('/catalog');
    }
}
