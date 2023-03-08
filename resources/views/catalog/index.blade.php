@extends('catalog.layout.main')

@if (session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p>{{ session('error') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ session('success') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@section('container')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                @can('admin')
                    <a href="/category/create">Create</a>
                @endcan
                <a href="/catalog" class="btn btn-secondary my-2">all</a>
                @foreach ($categories as $category)
                    <a href="/catalog/{{ $category->CategoryName }}"
                        class="btn btn-secondary my-2">{{ $category->CategoryName }}</a>
                    @can('admin')
                        <div>
                            <a href="/category/{{ $category->CategoryName }}/edit">edit</a>
                        </div>
                        <div>
                            <form action="/category/{{ $category->CategoryName }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit">Delete</button>
                            </form>
                        </div>
                    @endcan
                @endforeach
            </div>
        </div>
    </section>

    <div class="album">
        <div class="container">
            <div class="row">
                @can('admin')
                    <a href="/catalog/create">
                        <div class="card" style="width: 18rem;">
                            <h1>create</h1>
                        </div>
                    </a>
                @endcan
                @foreach ($products as $product)
                    <div class="col mb-5">
                        <a href="/catalog/show/{{ $product->ProductSlug }}">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top"
                                    src="https://source.unsplash.com/1200x400?{{ $product->CategoryID }}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->ProductName }}</h5>
                                    <p class="card-text">Rp. {{ $product->ProductPrice }}</p>
                                    <div>
                                        <p class="card-text">{{ $product->created_at->diffForHumans() }}</p>
                                        <form action="/wishlist" method="POST">
                                            @csrf
                                            <input type="hidden" name="ProductID" value="{{ $product->ProductID }}">
                                            <button type="submit">add</button>
                                        </form>
                                        @can('admin')
                                            <a href="/catalog/{{ $product->ProductID }}/edit">edit</a>
                                            <form action="/catalog/{{ $product->ProductID }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button type="submit">delete</button>
                                            </form>
                                        @endcan
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
