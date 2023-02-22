@extends('account.layout.main')

@php
    $user = auth()->user();
@endphp

@section('container')
    <div class="card-body">
        <form action="/account" method="POST" enctype="multipart/form-data">
            @csrf
            <img src="@php if($user->ProfileImage){
                        echo("storage/$user->ProfileImage");
                    }else{
                        echo("storage/profile_image/default");
                    } @endphp"
                alt="" class="image-preview img-fluid" style="width: 200px; height: 200px; border-radius: 50%">
            <input type="hidden" name="OldImage" value="{{ $user->ProfileImage }}">
            <div class="form-group">
                <label for="Email">Email address</label>
                <input type="email" class="form-control" id="Email" placeholder="name@example.com" name="Email"
                    value="{{ old('Email', $user->Email) }}">
                @error('Email')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="DOB">DOB</label>
                <input type="date" class="form-control" id="DOB" placeholder="" name="DOB"
                    value="{{ old('DOB', $user->DOB) }}">
                @error('DOB')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="Gender">Gender</label>
                <select class="form-control" id="Gender" name="Gender">
                    <option value="male">male</option>
                    <option value="female">female</option>
                    <option>null</option>
                </select>
                @error('Gender')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="PhoneNumber">Phone number</label>
                <input type="tel" class="form-control" id="PhoneNumber" placeholder="" name="PhoneNumber"
                    value="{{ old('PhoneNumber', $user->PhoneNumber) }}">
                @error('PhoneNumber')
                    {{ $message }}
                @enderror
            </div>
            <div class="row">
                <div class="col">
                    <label for="First Name">First name</label>
                    <input type="text" class="form-control" id="FirstName" placeholder="" name="FirstName"
                        value="{{ old('FirstName', $user->FirstName) }}">
                    @error('FirstName')
                        {{ $message }}
                    @enderror
                </div>
                <div class="col">
                    <label for="LastName">Last name</label>
                    <input type="text" class="form-control" id="LastName" placeholder="" name="LastName"
                        value="{{ old('LastName', $user->LastName) }}">
                    @error('LastName')
                        {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="ProfileImage" class="form-label">Profile Image</label>
                <input class="form-control" type="file" id="ProfileImage" name="ProfileImage" onchange="previewImage()">
                @error('ProfileImage')
                    {{ $message }}
                @enderror
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block my-5">Save</button>
            <a href="/account/delete">Delete</a>
        </form>
    </div>
@endsection

@section('js')
    <script>
        function previewImage() {
            const image = document.querySelector('#ProfileImage');
            const imagePreview = document.querySelector('.image-preview');

            imagePreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(OFREvent) {
                imagePreview.src = OFREvent.target.result
            }
        }
    </script>
@endsection
