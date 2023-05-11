<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINK -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- CSS LINK -->
    
    <link rel="stylesheet" href="/css/styledashboard.css">

    <title>Dashboard | Edit Book</title>
</head>

<div class="header-text">
    <h1>
        Edit Book
    </h1>
</div>
<div class="input">
    <form action="{{route('updateBook', $book->id)}}" method="POST">
        @csrf
        <div class="input-group mb-4">
            <span class="input-group-text">Title</span>
            <input value="{{ $book -> title }}" name="title" type="text" class="form-control">
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text">Writer</span>
            <input value="{{ $book -> writer }}" name="writer" type="text" class="form-control">
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text">Publisher</span>
            <input value="{{ $book -> publisher }}" name="publisher" type="text" class="form-control">
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text">Cover Book</span>
            <input value="{{ $book -> cover }}" name="cover" type="file" class="form-control">
        </div>
        <div class="input-group mb-4">
            <span class="input-group-text">Synopsis</span>
            <input value="{{ $book -> sinopsis }}" name="sinopsis" type="text" class="form-control">
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="submit" name="submit">Save</button>
        </div>
    </form>
</div>