<!doctype html>
<html lang="en">

<head>
    <title>Dashboard KPI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4 pt-5">
                <h1><a href="/dashboard" class="logo">KPI ACT</a></h1>
                <br>
                <br>
                <ul class="list-unstyled components mb-5">
                    @auth
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Welcome Back!, {{ auth()->user()->name}}</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a class="nav-link @yield('user')" aria-current="page" href="{{ url('users') }}">User</a>
                            </li>
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                           </li>
                        </ul>
                    </li>

                    @else

                    @endauth
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">KPI</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a class="nav-link @yield('january')" aria-current="page" href="{{ url('januarys') }}">January</a>
                            </li>
                            <li>
                                <a class="nav-link @yield('february')" aria-current="page" href="{{ url('februarys') }}">February</a>
                            </li>
                            <li>
                                <a class="nav-link @yield('march')" aria-current="page" href="{{ url('marchs') }}">March</a>
                            </li>
                            <li>
                                <a class="nav-link @yield('april')" aria-current="page" href="{{ url('aprils') }}">April</a>
                            </li>
                            <li>
                                <a class="nav-link @yield('mei')" aria-current="page" href="{{ url('meis') }}">May</a>
                            </li>
                            <li>
                                <a class="nav-link @yield('june')" aria-current="page" href="{{ url('junes') }}">June</a>
                            </li>
                            <li>
                                <a class="nav-link @yield('july')" aria-current="page" href="{{ url('julys') }}">July</a>
                            </li>
                            <li>
                                <a class="nav-link @yield('august')" aria-current="page" href="{{ url('augusts') }}">August</a>
                            </li>
                            <li>
                                <a class="nav-link @yield('september')" aria-current="page" href="{{ url('septembers') }}">September</a>
                            </li>
                            <li>
                                <a class="nav-link @yield('obtober')" aria-current="page" href="{{ url('octobers') }}">October</a>
                            </li>
                            <li>
                                <a class="nav-link @yield('november')" aria-current="page" href="{{ url('novembers') }}">November</a>
                            </li>
                            <li>
                                <a class="nav-link @yield('december')" aria-current="page" href="{{ url('decembers') }}">December</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- <div class="mb-5">
                    <h3 class="h6">Subscribe for newsletter</h3>
                    <form action="#" class="colorlib-subscribe-form">
                        <div class="form-group d-flex">
                            <div class="icon"><span class="icon-paper-plane"></span></div>
                            <input type="text" class="form-control" placeholder="Enter Email Address">
                        </div>
                    </form>
                </div> -->
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <br>
            <div class="container">
                <section class="content">
                    @yield('content')
                </section>
            </div>
        </div>
    </div>

    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/popper.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/main.js"></script>
</body>

</html>