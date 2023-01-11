<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.index');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $id = auth()->user()->id;

        $rules = [
            'DOB' => 'date',
            'Gender' => 'String',
            'PhoneNumber' => 'String',
            'FirstName' => 'String',
            'LastName' => 'String',
            'ProfileImage' => 'image|file|max:1024'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('ProfileImage')) {
            if ($request->OldImage) {
                Storage::delete($request->OldImage);
            }
            $validatedData['ProfileImage'] = $request->file('ProfileImage')->store('profile_image');
        }

        $affected = User::where('id', $id)->update($validatedData);

        return redirect('/')->with('success', 'profile has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $id = auth()->user()->id;
        $user = User::where('id', $id)->get()[0];

        if ($user->ProfileImage) {
            Storage::delete($user->ProfileImage);
        }

        User::destroy($user->id);

        return redirect('/');
    }
}
