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
                        <a class="nav-link active" aria-current="page" href="#">Login</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- FORM -->
        <div class="form mx-3">
            <div class="row mt-3">
                <div class="col-12 text-start">
                    <h3>Data diri</h3>
                    <p class="m-0">Masukkan data diri yang sudah kamu dapatkan <br>
                        saat pendaftaran</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6">

                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
                <div class="col-6 ilus-div">
                    <img class="ilus" src="{{ asset('img/illustration.png') }}" alt="ilustrasi" width="70%">
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


    <script src="assets/js/bootstrap.bundle.js"></script>
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