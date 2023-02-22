@extends('account.layout.main')

@php
    $user = auth()->user();
@endphp

@section('container')
    <a href="/account/address/create">Create</a>
    @foreach ($address as $a)
        <div class="card">
            <h5 class="card-header">{{ $a->user->Username }}</h5>
            <div class="card-body">
                <p class="card-text">{{ $a->Address }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    @endforeach
@endsection
