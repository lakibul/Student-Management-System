<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">

</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a href="" class="navbar-brand"><img src="{{asset('/')}}img/logo.png" alt="" height="40px"/></a>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link">Home</a></li>
                <li><a href="" class="nav-link">All Course</a></li>
                <li><a href="" class="nav-link">Login</a></li>
                <li><a href="" class="nav-link">Registration</a></li>
            </ul>
        </div>
    </nav>

    @yield('body')

    <style src="{{asset('/')}}js/jquery-3.6.0.js"></style>
    <style src="{{asset('/')}}js/bootstrap.js"></style>
</body>
</html>
