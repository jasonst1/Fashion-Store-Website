@extends('account.layout.main')

@php
    $user = auth()->user();
@endphp

@section('content')
    <div class="card-body">
        <h1>Create address</h1>
        <form action="/account/address" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="Email">Address</label>
                <input type="Address" class="form-control" id="Address" placeholder="Jl. Example" name="Address"
                    value="{{ old('Address') }}">
                @error('Email')
                    {{ $message }}
                @enderror
            </div>
            <div class="row">
                <div class="col">
                    <label for="Email">Country</label>
                    <input type="Country" class="form-control" id="Country" placeholder="" name="Country"
                        value="{{ old('Country') }}">
                    @error('Email')
                        {{ $message }}
                    @enderror
                </div>
                <div class="col">
                    <label for="Email">Province</label>
                    <input type="Province" class="form-control" id="Province" placeholder="" name="Province"
                        value="{{ old('Province') }}">
                    @error('Email')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="Email">City</label>
                    <input type="City" class="form-control" id="City" placeholder="" name="City"
                        value="{{ old('City') }}">
                    @error('Email')
                        {{ $message }}
                    @enderror
                </div>
                <div class="col">
                    <label for="Email">Zipcode</label>
                    <input type="Zipcode" class="form-control" id="Zipcode" placeholder="" name="Zipcode"
                        value="{{ old('Zipcode') }}">
                    @error('Email')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block my-5">Save</button>
        </form>
    @endsection