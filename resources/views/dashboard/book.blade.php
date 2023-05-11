@extends ('master.masterdashboard')

@section ('title', 'Book')
@section ('content')

<div class="header-text">
    <h1>
        Books
    </h1>
</div>

@if(Session::has('edit-book'))
    <div class="alert alert-info" role="alert">
        {{Session::get('message')}}
    </div>
@endif
@if(Session::has('add-book'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif
@if(Session::has('delete-book'))
    <div class="alert alert-warning" role="alert">
        {{Session::get('message')}}
    </div>
@endif

<table class="table">
    <tr>
      <th class="table-header" scope="col">No</th>
      <th class="table-header" scope="col">Title</th>
      <th class="table-header" scope="col">Writer</th>
      <th class="table-header" scope="col">Publisher</th>
      <th class="table-header-cover" scope="col">Cover</th>
      <th class="table-header" scope="col">Synopsis</th>
      <th class="table-header-action" scope="col">Action</th>
    </tr>
    <?php
        $i=1;
    ?>
    @foreach ($book as $book)
    <tr>
      <td class="table-down">{{ $i++ }}</td>
      <td class="table-down">{{ $book -> title }}</td>
      <td class="table-down">{{ $book -> writer }}</td>
      <td class="table-down">{{ $book -> publisher }}</td>
      <td class="table-down"><img class="cover-book" src="/images/{{ $book->cover }}" alt=""></td>
      <td class="table-down">{{ $book -> sinopsis }}</td>
      <td class="action">
        <a href="{{route('editBook',$book->id)}}">Edit</a>
        <form action="/book/{{ $book -> id }}" method="POST">
            @csrf
            @method ('delete')
            <input class="delete-button" type="submit" value="Delete">
        </form>
      </td>
    </tr>
    @endforeach
</table>
<form action="/dashboard/add-book">
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary">Add Book</button>
    </div>
</form>



@endsection