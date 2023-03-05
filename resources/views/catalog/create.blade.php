@extends('catalog.layout.main')

@section('container')
    <div class="card-body">
        <form action="/catalog" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="ProductName">Product name</label>
                <input type="text" class="form-control" id="ProductName" placeholder="" name="ProductName">
                @error('ProductName')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="ProductSummary">Product summary</label>
                <input type="text" class="form-control" id="ProductSummary" placeholder="" name="ProductSummary">
                @error('ProductSummary')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="ProductPrice">Product price</label>
                <input type="number" class="form-control" id="ProductPrice" placeholder="" name="ProductPrice">
                @error('ProductPrice')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="ProductQuantity">Product quantity</label>
                <input type="number" class="form-control" id="ProductQuantity" placeholder="" name="ProductQuantity">
                @error('ProductQuantity')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="ProductDiscount">Product discount</label>
                <input type="number" class="form-control" id="ProductDiscount" placeholder="" name="ProductDiscount">
                @error('ProductDiscount')
                    {{ $message }}
                @enderror
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block my-5">Save</button>
        </form>
    </div>
@endsection
