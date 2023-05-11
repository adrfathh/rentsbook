@extends ('master.masteruser')
@section ('title', 'Dashboard')
@section ('content')

<h1>Hello, welcome user</h1>
<div class="book-display">
    @foreach ($book as $book)
    <div class="card" style="width: 40rem;">
        <div class="card-body">
            <div>
                <img src="{{ asset('images/' .$book->cover )}}" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="element">
                <h5 class="card-title">{{ $book -> title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Synopsis</h6>
                <p class="card-text">{{ $book -> sinopsis }}</p>
                <a href="#" class="card-link">Read</a>
                <a href="#" class="card-link">Download</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection