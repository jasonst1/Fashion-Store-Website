<?php

namespace App\Http\Controllers;

use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        // if ($request->Password != $request->passwordConfirmation) {
        //     return back()->with('error', 'password must be the same');
        // }

        $validatedData = $request->validate([
            'Username' => 'required|unique:users|max:255',
            'Email' => 'required|unique:users|email:dns',
            'Password' => 'required|min:6|max:255|same:passwordConfirmation',
        ]);

        $validatedData['id'] = IdGenerator::generate([
            'table' => 'users',
            'field' => 'id',
            'length' => 6,
            'prefix' => 'US'
        ]);

        $validatedData['Password'] = Hash::make($validatedData['Password']);

        User::create($validatedData);

        $request->session()->flash('register', 'success');

        return redirect('/login');
    }
}
