@extends('account.layout.main')

@php
    $user = auth()->user();
@endphp

@section('content')
    <div class="card-body">
        <h1>Create Payment</h1>
        <form action="/account/payment" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="CardNumber">Card Number</label>
                <input type="string" class="form-control" id="CardNumber" placeholder="Example: 1234 5678 9101 1123"
                    name="CardNumber" value="{{ old('CardNumber') }}">
                @error('CardNumber')
                    {{ $message }}
                @enderror
            </div>
            <div class="row">
                <div class="col">
                    <label for="ExpiredDate">Expired Date</label>
                    <input type="date" class="form-control" id="ExpiredDate" placeholder="" name="ExpiredDate"
                        value="{{ old('ExpiredDate') }}">
                    @error('ExpiredDate')
                        {{ $message }}
                    @enderror
                </div>
                <div class="col">
                    <label for="CVV">CVV</label>
                    <input type="string" class="form-control" id="CVV" placeholder="" name="CVV"
                        value="{{ old('CVV') }}">
                    @error('CVV')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block my-5">Save</button>
        </form>
    @endsection
