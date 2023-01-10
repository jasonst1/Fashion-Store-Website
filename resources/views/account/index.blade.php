@extends('components.app')

@section('title')
    Account
@endsection

@section('css')
    <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Biodata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Address</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Payment</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <form action="/account" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="Email">Email address</label>
                    <input type="email" class="form-control" id="Email" placeholder="name@example.com" name="Email">
                </div>
                <div class="form-group">
                    <label for="DOB">DOB</label>
                    <input type="date" class="form-control" id="DOB" placeholder="" name="DOB">
                </div>
                <div class="form-group">
                    <label for="Gender">Gender</label>
                    <select class="form-control" id="Gender" name="Gender">
                        <option>null</option>
                        <option>male</option>
                        <option>female</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="PhoneNumber">Phone number</label>
                    <input type="tel" class="form-control" id="PhoneNumber" placeholder="" name="PhoneNumber">
                </div>
                <div class="row">
                    <div class="col">
                        <label for="First Name">First name</label>
                        <input type="text" class="form-control" id="FirstName" placeholder="" name="FirstName">
                    </div>
                    <div class="col">
                        <label for="LastName">Last name</label>
                        <input type="text" class="form-control" id="LastName" placeholder="" name="LastName">
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-lg btn-block my-5">Save</button>
            </form>
        </div>
    </div>
@endsection

@section('js')
@endsection
