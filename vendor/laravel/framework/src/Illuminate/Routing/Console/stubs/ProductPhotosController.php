<?php

namespace App\Http\Controllers;

use App\Models\ProductPhotos;
use App\Http\Requests\StoreProductPhotosRequest;
use App\Http\Requests\UpdateProductPhotosRequest;

class ProductPhotosController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductPhotosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductPhotosRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductPhotos  $productPhotos
     * @return \Illuminate\Http\Response
     */
    public function show(ProductPhotos $productPhotos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductPhotos  $productPhotos
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductPhotos $productPhotos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductPhotosRequest  $request
     * @param  \App\Models\ProductPhotos  $productPhotos
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductPhotosRequest $request, ProductPhotos $productPhotos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductPhotos  $productPhotos
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductPhotos $productPhotos)
    {
        //
    }
}
