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
                <div class="title-form col-12 text-start" style="margin-top: 50px;">
                    <h3><b>Data diri</b></h3>
                    <p class="m-0">Masukkan data diri yang sudah kamu dapatkan <br>
                        saat pendaftaran</p>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12">
                    <form method="POST" action="Submit">
                        @csrf
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="no_daftar">Nomor pendaftaran</label>
                                <input id="no_daftar" type="text" class="border rounded-0 form-control" style="margin-bottom: 15px;" name="no_pendaftaran" />
                            </div>

                            <div class="form-group col-6">
                                <label for="nama">Nama Lengkap</label>
                                <input id="nama" type="text" class="border rounded-0 form-control" style="margin-bottom: 15px;" name="nama_lengkap" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="nik">NIK</label>
                                <input id="nik" type="text" class="border rounded-0 form-control" style="margin-bottom: 15px;" name="no_ktp" />
                            </div>

                            <div class="form-group col-6">
                                <label for="jk">Jenis Kelamin:</label>
                                <select class="form-control" id="jk">
                                    <option>laki-laki</option>
                                    <option>perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="ttl">Tempat tanggal lahir</label>
                                <input id="ttl" type="text" class="border rounded-0 form-control" style="margin-bottom: 15px;" name="ttl" />
                            </div>

                            <div class="form-group col-6">
                                <label for="asal">Asal:</label>
                                <input id="asal" type="text" class="border rounded-0 form-control" style="margin-bottom: 15px;" name="asal" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="jk">Status Kewarganegaraan</label>
                                <select class="form-control" id="jk">
                                    <option>WNA</option>
                                    <option>WNI</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="ayah">Nama ayah</label>
                                <input id="ayah" type="text" class="border rounded-0 form-control" style="margin-bottom: 15px;" name="nama_ayah" />
                            </div>

                            <div class="form-group col-6">
                                <label for="jk">Pekerjaan</label>
                                <select class="form-control" id="jk">
                                    <option>tidak bekerja</option>
                                    <option>pns</option>
                                    <option>tni</option>
                                    <option>wiraswasta</option>
                                    <option>dosen</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="ibu">Nama ibu</label>
                                <input id="ibu" type="text" class="border rounded-0 form-control" style="margin-bottom: 15px;" name="nama_ibu" />
                            </div>

                            <div class="form-group col-6">
                                <label for="jk">Pekerjaan</label>
                                <select class="form-control" id="jk">
                                    <option>tidak bekerja</option>
                                    <option>pns</option>
                                    <option>tni</option>
                                    <option>wiraswasta</option>
                                    <option>dosen</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="wali">Nama wali</label>
                                <input id="wali" type="text" class="border rounded-0 form-control" style="margin-bottom: 15px;" name="nama_wali" />
                            </div>

                            <div class="form-group col-6">
                                <label for="jk">Pekerjaan</label>
                                <select class="form-control" id="jk">
                                    <option>tidak bekerja</option>
                                    <option>pns</option>
                                    <option>tni</option>
                                    <option>wiraswasta</option>
                                    <option>dosen</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="saudara">Jumlah Saudara</label>
                                <input id="saudara" type="text" class="border rounded-0 form-control" style="margin-bottom: 15px;" name="saudara" />
                            </div>

                            <div class="form-group col-6">
                                <label for="urutan">Anak Ke</label>
                                <input id="urutan" type="text" class="border rounded-0 form-control" style="margin-bottom: 15px;" name="urutan_saudara" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="jk">UKT</label>
                                <select class="form-control" id="jk">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>

                                </select>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Save Changes" name="submit"></input>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>


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