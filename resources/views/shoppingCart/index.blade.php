<style>
    a {
        text-decoration: none !important;
        color: black !important;
    }

    .card div {
        display: flex;
        flex-direction: row;
    }

    .card img {
        width: 200px;
        height: 200px;
    }

    .card-body {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        flex-basis: 25%;
    }

    .card-body * {
        display: flex;
        align-items: center;
    }
</style>

@extends('shoppingCart.layout.main');

@section('container')
    <div class="card my-3">
        <div>
            <img class="card-img-top" src="https://source.unsplash.com/1200x400?cat" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Kucing Oyen</h5>
                <p class="card-text">Price</p>
                <div>
                    <a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
                </div>
                <div>
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path
                                d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                        </svg></a>
                </div>
            </div>
        </div>
    </div>
@endsection
