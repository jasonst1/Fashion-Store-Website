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

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($products as $product)
                    <div class="col">
                        <div class="card mb-5" style="width: 18rem;">
                            <img class="card-img-top" src="https://source.unsplash.com/1200x400?{{ $product->CategoryID }}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->ProductName }}</h5>
                                <p class="card-text">{{ $product->ProductSummary }}</p>
                                <a href="/catalog/show/{{ $product->ProductSlug }}" class="btn btn-primary">detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
