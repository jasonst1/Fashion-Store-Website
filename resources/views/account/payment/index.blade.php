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
    <a href="/account/payment/create">Create</a>
    @foreach ($payment as $p)
        <div class="card">
            <h5 class="card-header">{{ $p->user->Username }}</h5>
            <div class="card-body">
                <p class="card-text">{{ $p->CardNumber }}</p>
                {{-- payment seharusnya gabisa update --}}
                {{-- <a href="/account/payment/{{ $p->CardNumber }}/edit" class="btn btn-primary">Update</a> --}}
                <form action="/account/payment/delete" method="POST">
                    @csrf
                    <input type="hidden" name="CardNumber" value="{{ $p->CardNumber }}">
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
