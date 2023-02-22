<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Address;
use App\Http\Requests\StoreAddressRequest;
use App\Http\Requests\UpdateAddressRequest;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // private static $id = auth()->user()->id;
    // private static $user = User::where('id', $id)->get();

    public function index()
    {
        $id = auth()->user()->id;

        // return Address::where('UserID', $id)->get();

        return view('account.address.index', [
            'address' => Address::where('UserID', $id)->with('user')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.address.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAddressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAddressRequest $request)
    {
        $id = auth()->user()->id;

        $rule = [
            'Address' => 'required|string|starts_with:Jl. ',
            'Country' => 'required|string',
            'Province' => 'required|string',
            'City' => 'required|string',
            'Zipcode' => 'required|string|size:5'
        ];

        $validatedData = $request->validate($rule);

        $validatedData['UserID'] = $id;

        Address::create($validatedData);

        return redirect('/account/address')->with('success', 'new address has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function edit(String $address)
    {
        $id = auth()->user()->id;

        $oldAddress = Address::where('UserID', $id)->where('Address', $address)->get();

        return view('account.address.update', [
            'address' => $oldAddress
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAddressRequest  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAddressRequest $request, Address $address)
    {
        $id = auth()->user()->id;

        $rule = [
            'Address' => 'required|string|starts_with:Jl. ',
            'Country' => 'required|string',
            'Province' => 'required|string',
            'City' => 'required|string',
            'Zipcode' => 'required|string|size:5'
        ];

        $validatedData = $request->validate($rule);

        $validatedData['UserID'] = $id;

        Address::where('UserID', $id)->where('Address', $address->Address)->update($validatedData);

        return redirect('/account/address')->with('success', 'address has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $address)
    {
        $id = auth()->user()->id;

        Address::where('UserID', $id)->where('Address', $address)->delete();

        return redirect('/account/address')->with('success', 'address has been deleted');
    }
}
