@extends ('master.master')

@section ('content')

<body style="overflow: hidden; background-color: rgb(230, 230, 230);">
<div class="login-form">
    <div class="login-content">
        <form action="/auth/login" method="POST">
            @csrf
            <figure class="text-center">
                <blockquote class="blockquote">
                    <h1>Login</h1>
                </blockquote>
                <figcaption class="blockquote-footer">
                    Enter <cite title="Source Title"> your username and password to return to reading</cite>
                </figcaption>
            </figure>
            @if(Session::has('status'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('message')}}
                </div>
            @endif
            <div class="input-group mb-3">
                <span class="input-group-text">Username</span>
                <input name="name" type="username" class="form-control">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Password</span>
                <input name="password" type="password" class="form-control">
            </div>
            <p>Not a member? <a style="text-decoration: none;" href="/register">Register</a></p>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit" name="submit">Login</button>
            </div>
        </form>
    </div>
</div>

@endsection