@extends('components.app')

@section('title')
    Account
@endsection

@section('css')
    <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
@endsection

@yield('css')

@section('content')
    @if (Request::is('account', 'account/address', 'account/payment'))
        @include('account.layout.header')
    @endif
    @yield('container')
@endsection

@section('js')
@endsection

@yield('js')
