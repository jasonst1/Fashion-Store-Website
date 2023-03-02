@extends('account.layout.main')

@php
    $user = auth()->user();
@endphp

@section('container')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ session('success') }}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <a href="/account/address/create">Create</a>
    @foreach ($address as $a)
        <div class="card">
            <h5 class="card-header">{{ $a->user->Username }}</h5>
            <div class="card-body">
                <p class="card-text">{{ $a->Address }}</p>
                <a href="/account/address/{{ $a->Address }}/edit" class="btn btn-primary">Update</a>
                <form action="/account/address/{{ $a->Address }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
