@extends ('master.masterdashboard')

@section ('title', 'User')
@section ('content')

<div class="header-text">
    <h1>
        Users
    </h1>
</div>

@if(Session::has('edit-user'))
    <div class="alert alert-info" role="alert">
        {{Session::get('message')}}
    </div>
@endif
@if(Session::has('delete-user'))
    <div class="alert alert-danger" role="alert">
        {{Session::get('message')}}
    </div>
@endif

<table class="table table-secondary table-striped">
    <tr class="table-in">
        <th class="no-header"> NO </th>
        <th class="name-header"> Name </th>
        <th class="email-header"> Email </th>
        <th class="phone-header"> Phone </th>
        <th class="address-header"> Address </th>
        <th class="action-header"> Action </th>
        <!-- <th> Action </th> -->
    </tr>
    <?php
        $i=1;
    ?>
    @foreach ($user as $user)
        <tr class="table-in">
            <td>{{ $i++ }}</td>
            <td>{{ $user -> name }}</td>
            <td>{{ $user -> email }}</td>
            <td>{{ $user -> no_hp }}</td>
            <td>{{ $user -> address }}</td>
            <td class="delete">
                <a href="{{route('editUser',$user->id)}}">Edit</a>
                <form action="/user/{{ $user -> id }}" method="POST">
                    @csrf
                    @method ('delete')
                    <input class="delete-button" type="submit" value="Delete">
                </form>
            </td>
            <!-- <td>
                <a class="btn btn-primary" href="user/{{ $user -> id }}/edit" role="button">Edit</a>
                <form action="/user/{{ $user -> id }}" method="POST">
                    @csrf
                    @method('delete')
                    <input class="btn btn-warning" type="submit" value="Delete">
                </form>
            </td> -->
        </tr>
    @endforeach
</table>

@endsection