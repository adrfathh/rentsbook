@extends ('master.master')

@section ('content')

<body style="overflow: hidden; background-color: rgb(230, 230, 230);">
<div class="login-form">
    <div class="register-content">
        <form action="/register/store" method="POST">
            @csrf
            <figure class="text-center">
                <blockquote class="blockquote">
                    <h1>Register</h1>
                </blockquote>
                <figcaption class="blockquote-footer">
                    Fill in the data below <cite title="Source Title"> to join us and read more books</cite>
                </figcaption>
            </figure>
            <div class="input-group mb-3">
                <span class="input-group-text">Name</span>
                <input name="name" type="text" class="form-control">
            </div>
            <div class="input-group mb-3">
                <input name="email" type="text" class="form-control">
                <span class="input-group-text" id="basic-addon2">@example.com</span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Password</span>
                <input name="password" type="password" class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Phone Number</span>
                <input name="no_hp" type="char" class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Address</span>
                <textarea name="address" class="form-control" rows="3"></textarea>
            </div>
            <p>Your a member? <a style="text-decoration: none;" href="/login">Login</a></p>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection