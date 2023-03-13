<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Categories;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\ProductPhotos;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use PhpParser\Node\Expr\Cast\Unset_;

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
        // text
        $rule = [
            'ProductName' => 'required|string',
            'ProductSummary' => 'required|string',
            'ProductPrice' => 'required|numeric',
            'ProductQuantity' => 'required|numeric',
            'ProductDiscount' => 'numeric',
            'ProductPhotos.*' => 'image|file|max:1024|nullable'
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

        //image

        if ($request->hasFile('ProductPhotos')) {

            $ProductPhotos = $request->file('ProductPhotos');

            foreach ($ProductPhotos as $ProductPhoto) {
                $path = $ProductPhoto->store('product_photos');

                ProductPhotos::create([
                    'ProductID' => $validatedData['ProductID'],
                    'Image' => $path
                ]);

                // gw kira kan selama ini kalo mau masukkin data ke database harus pake $validatedData 
                // ternyata ga pake itu juga bisa asalkan formatnya sama associative array 
                // terus elemen di array itu harus punya key yang sama sama field di tablenya biar bisa dimasukkin
            }

            // $validatedData['Image'] = $request->file('ProductPhotos')->store('product_photos');
        }

        // jadi bisa pake $validaedData juga, kalo fieldnya gaada ya ga dimasukkin
        // ProductPhotos::create($validatedData);

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
        return view("catalog.edit", [
            'product' => $catalog
        ]);
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
        $rule = [
            'ProductName' => 'required|string',
            'ProductSummary' => 'required|string',
            'ProductPrice' => 'required|numeric',
            'ProductQuantity' => 'required|numeric',
            'ProductDiscount' => 'numeric',
            'ProductPhotos.*' => 'image|file|max:1024|nullable'
        ];

        $validatedData = $request->validate($rule);

        unset($validatedData['ProductPhotos']);
        // gatau kenapa ProductPhotos masuk ke $validatedData
        // padahal di store dia gamasuk 
        // jadinya harus diunset manual

        // return $validatedData;

        Products::where('ProductID', $catalog->ProductID)->update($validatedData);

        //image

        if ($request->hasFile('ProductPhotos')) {

            // if ($request->OldImages) {
            //     foreach ($request->OldImages as $OldImage) {
            //         Storage::delete($OldImage->Image);
            //     }
            //     ProductPhotos::where('ProductID', $catalog->ProductID)->delete();
            // }

            // gatau kenapa kalo query di view terus pake input hidden buat old image dia gabisa
            // kayaknya karena dia bentuknya false array deh 
            // jadi dia sebenernya single variable tapi data yang disimpen array jadi keliatanya kaya array 
            // seeharusnya variablenya array terus data yang disimpen single element baru bisa diakses 
            // kaya kasus yang product photos itu photonya ada banyak terus nama inputnya pake ProductPhotos[], dipaksa jadi array 
            // jadi kesimpulanya gabisa kirim data yang bentuknya array sebagai single variable (kalo inputnya cuma sekali dalam satu submit)
            // kalo mau pake array variable tapi (inputnya harus banyak dalam satu submit), jadi kalo dari dasarnya datanya udah array e.g. dari queyr itu gabisa
            // meningan query di controller aja udah 
            // jadinya query disini aja 

            $OldImages = ProductPhotos::where('ProductID', $catalog->ProductID)->get();

            if ($OldImages) {
                foreach ($OldImages as $OldImage) {
                    Storage::delete($OldImage->Image);
                }
                ProductPhotos::where('ProductID', $catalog->ProductID)->delete();
            }

            $ProductPhotos = $request->file('ProductPhotos');

            foreach ($ProductPhotos as $ProductPhoto) {
                $path = $ProductPhoto->store('product_photos');

                ProductPhotos::create([
                    'ProductID' => $catalog->ProductID,
                    'Image' => $path
                ]);
            }
        }

        return redirect('/catalog')->with('success', 'product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $catalog)
    {
        // jadi kalo pake 2 table buat 1 data harus create dan delete di dua2nya

        $ProductPhotos = ProductPhotos::where('ProductID', $catalog->ProductID)->get();

        if ($ProductPhotos) {
            foreach ($ProductPhotos as $ProductPhoto) {
                if ($ProductPhoto->Image) {
                    Storage::delete($ProductPhoto->Image);
                }
            }
        }

        // if ($catalog->ProductPhotos->Image) {
        //     Storage::delete($catalog->ProductPhotos->Image);
        // }

        Products::where('ProductID', $catalog->ProductID)->delete();
        ProductPhotos::where('ProductID', $catalog->ProductID)->delete();

        return redirect('/catalog');
    }
}
