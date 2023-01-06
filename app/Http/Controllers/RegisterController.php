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
            'username' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|email:dns',
            'password' => 'required|min:6|max:255',
            // 'PasswordConfirmation' => 'required|confirmed|min:6|max:255'
        ]);

        $validatedData['id'] = IdGenerator::generate([
            'table' => 'users',
            'field' => 'id',
            'length' => 6,
            'prefix' => 'US'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('register', 'success');

        return redirect('/login');
    }
}
