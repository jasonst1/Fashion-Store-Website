@extends('catalog.layout.main')

<style>
    .content {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        margin: 5% 0%;
    }

    .content * {
        flex-basis: 40%;
    }

    .review {
        padding: 7%;
    }
</style>

@section('container')
    <div class="content">
        <div class="left">
            <img class="card-img" src="https://source.unsplash.com/1200x400?{{ $product->CategoryName }}" alt="Card image cap">
        </div>
        <div class="right">
            <div class="product">
                <h1>{{ $product->ProductName }}</h1>
                <p>{{ $product->ProductSummary }}</p>
            </div>
            <a href="/catalog" class="btn btn-primary">back</a>
        </div>
    </div>
    <div class="review">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addComment">
            add comment
        </button>

        <div class="modal fade" id="addComment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">add comment</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="/review" method="post">
                            @csrf
                            <input type="hidden" name="ProductID" value="{{ $product->ProductID }}">
                            <input type="text" name="Comment">
                            <button type="submit">save changes</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($reviews as $review)
            <div class="row">
                <p>{{ $review->Comment }}</p>
                @if (Gate::allows('commentOwner', $review))
                    <form action="/review/{{ $review->ReviewID }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit">delete</button>
                    </form>
                @endif
            </div>
        @endforeach
    </div>
@endsection
