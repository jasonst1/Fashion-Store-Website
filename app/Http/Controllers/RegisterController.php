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
        $validatedData = $request->validate([
            'Username' => 'required|unique:users|max:255',
            'Email' => 'required|unique:users|email:dns',
            'Password' => 'required|min:6|max:255',
            // 'PasswordConfirmation' => 'required|confirmed|min:6|max:255'
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
