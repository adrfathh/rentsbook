<!DOCTYPE html>
<html lang="en">
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

    <title>Dashboard | @yield('title')</title>
</head>
<body style="overflow: hidden;">
    <nav class="navbar">
        <h1>RentsBook</h1>
    </nav>
    
    <div class="content">
        <div class="container">
            @yield ('content')
        </div>
        <div class="sidebar">
            <div class="sidebarcontent">
                <a href="/dashboard/index" @if(request()->route()->url == 'dashboard.index') class="active" @endif><i class="bi bi-houses-fill"></i>Dashboard</a>
                <a href="/dashboard/users"><i class="bi bi-people-fill"></i>Users</a>
                <a href="/dashboard/books"><i class="bi bi-book-fill"></i>Books</a>
                <a href="/dashboard/category"><i class="bi bi-tags-fill"></i>Category</a>
                <a href="/dashboard/rentslog"><i class="bi bi-bookmarks-fill"></i>Rent Logs</a>
                <a href="/admin/logout"><i class="bi bi-door-closed-fill"></i>Logout</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>