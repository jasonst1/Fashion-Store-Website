@extends('components.app')

@section('title')
    Account
@endsection

@section('css')
    <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/catalog.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="/account">Biodata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/account/address">Address</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="/payment">Payment</a>
                </li>
            </ul>
        </div>
    </div>
    @yield('container')
@endsection

@yield('js')
