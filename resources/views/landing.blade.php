<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dipoweb</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/material-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Add-Another-Button.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
</head>

<body id="page-top">
    <div class="container-fluid web p-0">

        <!-- NAVBAR -->
        <nav id="navbar-top" class="menu navbar navbar-light ">
            <div class="container-fluid">
                <img src="{{ asset('img/logo.png') }}" alt="logo web">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- HERO SECTION -->
        <div class="hero-section">
            <div class="row">
                <div class="bg col-12 text-center">
                    <p class="title">
                        Pendaftaran Ulang <br>
                        Universitas Dipongoro
                    </p>
                    <p class="subtitle">Semarang</p>
                </div>
            </div>
        </div>

        <!-- Card -->
        <div class="card-section mt-5 mb-5">
            <div class="row">
                <div class="col-6 text-center mt-4">
                    <div class="card text-center">
                        <img class="icon-card" src="{{ asset('img/icon-1.png') }}" alt="icon 1">
                        <p class="title-card">
                            <a href="{{ url('form') }}">
                                Pendaftaran Ulang <br>
                                Jalur SBMPTN
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-6 text-center mt-4">
                    <div class="card text-center">
                        <img class="icon-card-2" src="{{ asset('img/icon-2.png') }}" alt="icon 2">
                        <p class="title-card">
                            Pendaftaran Ulang <br>
                            Jalur UM
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Berita -->
        <div class="berita" style="margin: auto;">
            <div class="row m-auto">
                <div class="col-12 text-start">
                    <p class="title-berita"> Berita </p>
                </div>

            </div>
            <div class="row">
                <div class="col-4 mb-4">
                    <div class="card news">
                        <img src="{{ asset('img/berita.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title">
                                Gedung Jurusan Teknik Komputer Akhirnya Dibangun
                            </p>
                            <p class="card-text">
                                Pada 30 desember 2021 , gedung jurusan teknik komputer resmi dipakai oleh mahasiswa yang ada disana
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="card news">
                        <img src="{{ asset('img/berita.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title">
                                Gedung Jurusan Teknik Komputer Akhirnya Dibangun
                            </p>
                            <p class="card-text">
                                Pada 30 desember 2021 , gedung jurusan teknik komputer resmi dipakai oleh mahasiswa yang ada disana
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-4">
                    <div class="card news">
                        <img src="{{ asset('img/berita.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title">
                                Gedung Jurusan Teknik Komputer Akhirnya Dibangun
                            </p>
                            <p class="card-text">
                                Pada 30 desember 2021 , gedung jurusan teknik komputer resmi dipakai oleh mahasiswa yang ada disana
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <div class="footer">
            <div class="row text-center">
                <div class="col-12">
                    <img src="{{ asset('img/footer-icon.png') }}" alt="">
                </div>
            </div>
        </div>




    </div>



    <script>
        window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("navbar-top");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>

</body>

</html>