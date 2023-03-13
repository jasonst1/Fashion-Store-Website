@extends('catalog.layout.main')

@section('container')
    <div class="card-body">
        <form action="/catalog/{{ $product->ProductID }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
                <label for="ProductName">Product name</label>
                <input type="text" class="form-control" id="ProductName" placeholder="" name="ProductName"
                    value="{{ old('ProductName', $product->ProductName) }}">
                @error('ProductName')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="ProductSummary">Product summary</label>
                <input type="text" class="form-control" id="ProductSummary" placeholder="" name="ProductSummary"
                    value="{{ old('ProductSummary', $product->ProductSummary) }}">
                @error('ProductSummary')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="ProductPrice">Product price</label>
                <input type="number" class="form-control" id="ProductPrice" placeholder="" name="ProductPrice"
                    value="{{ old('ProductPrice', $product->ProductPrice) }}">
                @error('ProductPrice')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="ProductQuantity">Product quantity</label>
                <input type="number" class="form-control" id="ProductQuantity" placeholder="" name="ProductQuantity"
                    value="{{ old('ProductQuantity', $product->ProductQuantity) }}">
                @error('ProductQuantity')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="ProductDiscount">Product discount</label>
                <input type="number" class="form-control" id="ProductDiscount" placeholder="" name="ProductDiscount"
                    value="{{ old('ProductDiscount', $product->ProductDiscount) }}">
                @error('ProductDiscount')
                    {{ $message }}
                @enderror
            </div>
            {{-- @php
                use App\Models\ProductPhotos;
                $OldImages = ProductPhotos::where('ProductID', $product->ProductID)->get();
            @endphp
            <input type="hidden" name="OldImages" value="{{ $OldImages }}"> --}}
            <div class="form-group">
                <label for="ProductPhotos">Product photos</label>
                <input type="file" class="form-control" id="ProductPhotos" placeholder="" name="ProductPhotos[]"
                    multiple>
                @error('ProductPhotos')
                    {{ $message }}
                @enderror
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block my-5">Save</button>
        </form>
    </div>
@endsection
