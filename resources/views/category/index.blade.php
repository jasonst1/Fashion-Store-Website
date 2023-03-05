@extends('catalog.layout.main')

@section('container')
    <div class="card-body">
        <form action="/category" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="CategoryName">Category name</label>
                <input type="text" class="form-control" id="CategoryName" placeholder="" name="CategoryName"
                    value="{{ old('CategoryName') }}">
                @error('CategoryName')
                    {{ $message }}
                @enderror
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block my-5">Save</button>
        </form>
    </div>
@endsection
