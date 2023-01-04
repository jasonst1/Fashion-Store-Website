@extends('catalog.layout.main')

@section('container')
    <div class="col">
        <div class="card mb-5" style="width: 18rem;">
            <img class="card-img-top" src="https://source.unsplash.com/1200x400?{{ $product->categories->CategoryName }}"
                {{-- BUG --}} alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $product->ProductName }}</h5>
                <p class="card-text">{{ $product->ProductSummary }}</p>
                <a href="/catalog" class="btn btn-primary">back</a>
            </div>
        </div>
    </div>
@endsection
