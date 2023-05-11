@extends ('master.masterdashboard')

@section ('title', 'Home')
@section ('content')

<div class="header-text">
    <h1>
        Dashboard
    </h1>
</div>
    <div class="dashboard-view">
        <div class="disp">
            <h1><i class="bi bi-book-fill"> {{$book}}</i><br>Books</h1>
        </div>
        <div class="disp">
            <h1><i class="bi bi-tags-fill"> 2</i><br>Category</h1>
        </div>
        <div class="disp">
            <h1><i class="bi bi-people-fill"> {{$user}}</i><br>Users</h1>
        </div>
    </div>


@endsection