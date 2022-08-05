<!doctype html>
<html lang="en">

<head>
    <title>KPI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
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
                <h1><a href="index.html" class="logo">Plaza</a></h1>
                <br>
                <br>
                <ul class="list-unstyled components mb-5">
                    @auth
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Welcome Back!, {{ auth()->user()->name}}</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">User</a>
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
                                <a href="#">January</a>
                            </li>
                            <li>
                                <a href="#">February</a>
                            </li>
                            <li>
                                <a href="#">March</a>
                            </li>
                            <li>
                                <a href="#">April</a>
                            </li>
                            <li>
                                <a href="#">Mei</a>
                            </li>
                            <li>
                                <a href="#">June</a>
                            </li>
                            <li>
                                <a href="#">July</a>
                            </li>
                            <li>
                                <a href="#">August</a>
                            </li>
                            <li>
                                <a href="#">September</a>
                            </li>
                            <li>
                                <a href="#">October</a>
                            </li>
                            <li>
                                <a href="#">November</a>
                            </li>
                            <li>
                                <a href="#">December</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Summary</a>
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
        <!-- <div id="content" class="p-4 p-md-5 pt-5">
            <div class="container">
                <div class="row mb-3">
                    <table class="table table-striped table-hover mt-3">
                        <thead class="text-center">
                            <h2>January</h2>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Ach</th>
                                <th scope="col">%</th>
                                <th scope="col">Points</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div> -->
        <div id="content">
            <br>
            <div class="container">
                <section class="content">
                    @yield('content')
                </section>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>