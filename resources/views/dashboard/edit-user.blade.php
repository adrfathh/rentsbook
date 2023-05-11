@extends ('master.masterdashboard')

@section ('title', 'Home')
@section ('content')

<div class="edit-form">
    <div class="register-content">
        <form action="{{route('update', $user->id)}}" method="POST">
            @csrf
            <figure class="text-center">
                <blockquote class="blockquote">
                    <h1>Edit User</h1>
                </blockquote>
            </figure>
            <div class="content-edit">
                <div class="input-group mb-3">
                    <span class="input-group-text">Name</span>
                    <input name="name" type="text" class="form-control" value="{{ $user -> name }}">
                </div>
                <div class="input-group mb-3">
                    <input name="email" type="text" class="form-control" value="{{ $user -> email }}">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Phone Number</span>
                    <input name="no_hp" type="char" class="form-control" value="{{ $user -> no_hp }}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Address</span>
                    <textarea name="address" class="form-control" rows="3" value="{{ $user -> address }}"></textarea>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" name="submit" type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection