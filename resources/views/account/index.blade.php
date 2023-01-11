@php
    $user = auth()->user();
@endphp

@extends('components.app')

@section('title')
    Account
@endsection

@section('css')
    <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Biodata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Address</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Payment</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <form action="/account" method="POST" enctype="multipart/form-data">
                @csrf
                <img src="@php if($user->ProfileImage){
                        echo("storage/$user->ProfileImage");
                    }else{
                        echo("storage/profile_image/default");
                    } @endphp"
                    alt="" style="width: 200px; height: 200px">
                <input type="hidden" name="OldImage" value="{{ $user->ProfileImage }}">
                <div class="form-group">
                    <label for="Email">Email address</label>
                    <input type="email" class="form-control" id="Email" placeholder="name@example.com" name="Email"
                        value="{{ old('Email', $user->Email) }}">
                    @error('Email')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-group">
                    <label for="DOB">DOB</label>
                    <input type="date" class="form-control" id="DOB" placeholder="" name="DOB"
                        value="{{ old('DOB', $user->DOB) }}">
                    @error('DOB')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Gender">Gender</label>
                    <select class="form-control" id="Gender" name="Gender">
                        <option value="male">male</option>
                        <option value="female">female</option>
                        <option>null</option>
                    </select>
                    @error('Gender')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-group">
                    <label for="PhoneNumber">Phone number</label>
                    <input type="tel" class="form-control" id="PhoneNumber" placeholder="" name="PhoneNumber"
                        value="{{ old('PhoneNumber', $user->PhoneNumber) }}">
                    @error('PhoneNumber')
                        {{ $message }}
                    @enderror
                </div>
                <div class="row">
                    <div class="col">
                        <label for="First Name">First name</label>
                        <input type="text" class="form-control" id="FirstName" placeholder="" name="FirstName"
                            value="{{ old('FirstName', $user->FirstName) }}">
                        @error('FirstName')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="col">
                        <label for="LastName">Last name</label>
                        <input type="text" class="form-control" id="LastName" placeholder="" name="LastName"
                            value="{{ old('LastName', $user->LastName) }}">
                        @error('LastName')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="ProfileImage" class="form-label">Profile Image</label>
                    <input class="form-control" type="file" id="ProfileImage" name="ProfileImage">
                    @error('ProfileImage')
                        {{ $message }}
                    @enderror
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block my-5">Save</button>
                <a href="/account/delete">Delete</a>
            </form>
        </div>
    </div>
@endsection

@section('js')
@endsection
