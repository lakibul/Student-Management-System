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
    <nav class="navbar navbar-expand-md navbar-light bg-light border-bottom shadow sticky-top">
        <div class="container">
            <a href="" class="navbar-brand"><img src="{{asset('/')}}img/logo.png" alt="" height="40px"/></a>
            <ul class="navbar-nav">
                <li><a href="" class="nav-link">Home</a></li>
                <li><a href="" class="nav-link">All Course</a></li>
                <li><a href="{{route('user-login')}}" class="nav-link">Login</a></li>
                <li><a href="{{route('user-register')}}" class="nav-link">Registration</a></li>
            </ul>
        </div>
    </nav>
{{--    <hr class="mt-0 mb-0"/>--}}

    @yield('body')

    <footer class="pt-5 pb-4 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-body">
                        <h3>About Institute</h3>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus assumenda beatae commodi dolor facere facilis iure, minima mollitia, nulla obcaecati perspiciatis repellendus repudiandae rerum similique tempore temporibus velit vero vitae?</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-body">
                        <h3>Popular Link</h3>
                        <hr/>
                        <ul>
                            <li><a href="">Popular Course One</a></li>
                            <li><a href="">Popular Course two</a></li>
                            <li><a href="">Popular Course three</a></li>
                            <li><a href="">Popular Course Four</a></li>
                            <li><a href="">Popular Course Five</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card card-body rounded-0">
                        <h3>Follow us on</h3>
                        <hr/>
                        <ul class="nav">
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-facebook-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-twitter-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-linkedin"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-tiktok"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-telegram"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-2x fa-reddit"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="bg-white mt-5"/>
            <div class="row">
                <div class="col-12">
                    <p class="text-center text-white mb-0">Copyright@2022, All right received by BASIS SEIP PWLFB-3</p>
                </div>
            </div>
        </div>
    </footer>

    <style src="{{asset('/')}}js/jquery-3.6.0.js"></style>
    <style src="{{asset('/')}}js/bootstrap.js"></style>
</body>
</html>
