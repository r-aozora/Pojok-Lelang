<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="public/css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <style>
            body{
            font-family: 'Montserrat', sans-serif;
            background-color: #ffffff;
            }

        </style>
    </head>
    <body class="d-flex flex-column min-vh-100">
        <header>
            <div class="px-3 py-2" style="background-color: #055E68">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none fw-bold" style="font-size: 25px">POJOKLELANG</a>
                <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                    <li>
                        <a href="#" class="nav-link text-white">
                            HOME
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            DASHBOARD
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            PRODUCT
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white">
                            ABOUT
                        </a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
            <div class="px-3 py-2 mb-1" style="background-color: #2E4F4F">
            <div class="container d-flex flex-wrap justify-content-center">
                <div class="col-6 col-lg-6 mb-2 mb-lg-0 me-lg-auto" style="white-space:nowrap">
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right m-auto">
                        <li class="breadcrumb-item fw-bold mt-1"><a style="text-decoration:none" class="text-secondary" href="#">Home</a></li>
                        <li class="breadcrumb-item active fw-bold mt-1 text-white">Petugas</li>
                        </ol>
                    </div>
                </div>

                <div class="text-end col-6 col-lg-6 me-lg-auto">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle text-white btn-sm" style="border:none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-coin"></i> Lelang
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#"><i class="bi bi-people px-1"></i> Data Masyarakat</a></li>
                          <li><a class="dropdown-item" href="#"><i class="bi bi-box px-1"></i> Data Petugas</a></li>
                          <li><a class="dropdown-item" href="#"><i class="bi bi-box2 px-1"></i> Barang</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn dropdown-toggle text-white btn-sm" style="border:none" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i> Admin
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Log Out <i class="bi bi-box-arrow-right"></i></a></li>
                          <li><a class="dropdown-item" href="#">Kembali <i class="bi bi-backspace"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </header>
        <div class="container">
            <h2 class="mt-4">Data Masyarakat</h2>
            <div class="row">
                <div class="col">
                    <div class="card mt-4 mb-4">
                        <div class="card-body">
                          <h5 class="card-title mt-2 fw-bold" style="color:#055E68">Data Masyarakat</h5>
                          <div class=" d-flex flex-wrap justify-content-center mt-4">
                            <div class="col-6 col-lg-6 mb-2 mb-lg-0 me-lg-auto" style="white-space:nowrap">
                                <div class="col-sm-6">
                                    <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
                                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                                      </form>
                                </div>
                            </div>

                            <div class="text-end col-6 col-lg-6 me-lg-auto">

                            </div>
                          <table class="table table-bordered mt-4" style="text-align: center">
                            <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Nama Barang</th>
                                  <th>Tanggal</th>
                                  <th>Harga Barang</th>
                                  <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>267111</td>
                                  <td>Rumah</td>
                                  <td>22/05/2002</td>
                                  <td>100.000.000</td>
                                  <td><a class="btn text-white" style="background-color:#055E68" href="#" role="button">Detail</i></a></td>
                                </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <footer class="mt-auto">
                <div class="text-center p-3" style="background-color:#055E68" >
                    <a class="text-white" style="text-decoration: none" href="https://mdbootstrap.com/">Copyright © 2023 Pojok Lelang. All rights reserved.</a>
                </div>
        </footer>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
