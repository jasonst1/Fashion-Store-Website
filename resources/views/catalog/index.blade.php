@extends('catalog.layout.main')

@section('container')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <a href="/catalog" class="btn btn-secondary my-2">all</a>
                @foreach ($categories as $category)
                    <a href="/catalog/{{ $category->CategoryName }}"
                        class="btn btn-secondary my-2">{{ $category->CategoryName }}</a>
                @endforeach
            </div>
        </div>
    </section>

    <div class="album">
        <div class="container">
            <div class="row">
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
                                        <a href="#"><i class="bi bi-heart"></i></a>
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
