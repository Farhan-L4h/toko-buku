<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bahan</title>

    <!-- Boostsrap local -->
    <link rel="stylesheet" href="/css/-grid.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="/js/bootstrap.bundle.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap.js.map"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

</head>

<body style="background-color: lightgray;">


    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FARJAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>


    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- content -->

                    <h3 class="text-center m-2">APLIKASI BARANG</h3>

                    <!-- search bar -->

                    <div class="d-flex justify-content-center">
                        <div class="col-5 ">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>

                    <div class="ms-5">
                        <a href="#" class=""><button class="btn btn-primary">TAMBAH DATA</button></a>
                    </div>

                    // tabel
                    <div class="card m-5">

                        <div class="card-body shadow-sm rounded">
                            <h3 class="text-center">DATA BARANG</h3>

                            <!-- tabel -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <!-- side bar -->

                <!DOCTYPE html>
                <html lang="en">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
                    <title>Sidebar Bootstrap</title>


                    <style>
                        body {
                            font-family: 'Arial', sans-serif;
                        }

                        #sidebar {
                            height: 100%;
                            width: 250px;
                            position: fixed;
                            top: 0;
                            left: 0;
                            background-color: #343a40;
                            padding-top: 20px;
                            padding-right: 10px;
                        }

                        #sidebar a {
                            padding: 8px 8px 8px 32px;
                            text-decoration: none;
                            font-size: 18px;
                            color: #818181;
                            display: block;
                            transition: 0.3s;
                        }

                        #sidebar a:hover {
                            color: #f8f9fa;
                        }

                        #content {
                            margin-left: 250px;
                            padding: 15px;
                        }
                    </style>
                </head>

                <body>

                    <div id="sidebar">
                        <a href="#">Menu 1</a>
                        <a href="#">Menu 2</a>
                        <a href="#">Menu 3</a>
                        <a href="#">Menu 4</a>
                        <!-- Tambahkan menu lainnya sesuai kebutuhan -->
                    </div>

                    <div id="content">
                        <h2>Isi Konten</h2>
                        <p>Ini adalah halaman konten utama.</p>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                </body>

                <!-- carousel -->
                <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>



                <style>
                    .bd-placeholder-img {
                        font-size: 1.125rem;
                        text-anchor: middle;
                        -webkit-user-select: none;
                        -moz-user-select: none;
                        user-select: none;
                    }

                    @media (min-width: 768px) {
                        .bd-placeholder-img-lg {
                            font-size: 3.5rem;
                        }
                    }

                    .b-example-divider {
                        width: 100%;
                        height: 3rem;
                        background-color: rgba(0, 0, 0, .1);
                        border: solid rgba(0, 0, 0, .15);
                        border-width: 1px 0;
                        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
                    }

                    .b-example-vr {
                        flex-shrink: 0;
                        width: 1.5rem;
                        height: 100vh;
                    }

                    .bi {
                        vertical-align: -.125em;
                        fill: currentColor;
                    }

                    .nav-scroller {
                        position: relative;
                        z-index: 2;
                        height: 2.75rem;
                        overflow-y: hidden;
                    }

                    .nav-scroller .nav {
                        display: flex;
                        flex-wrap: nowrap;
                        padding-bottom: 1rem;
                        margin-top: -1px;
                        overflow-x: auto;
                        text-align: center;
                        white-space: nowrap;
                        -webkit-overflow-scrolling: touch;
                    }

                    .btn-bd-primary {
                        --bd-violet-bg: #712cf9;
                        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

                        --bs-btn-font-weight: 600;
                        --bs-btn-color: var(--bs-white);
                        --bs-btn-bg: var(--bd-violet-bg);
                        --bs-btn-border-color: var(--bd-violet-bg);
                        --bs-btn-hover-color: var(--bs-white);
                        --bs-btn-hover-bg: #6528e0;
                        --bs-btn-hover-border-color: #6528e0;
                        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
                        --bs-btn-active-color: var(--bs-btn-hover-color);
                        --bs-btn-active-bg: #5a23c8;
                        --bs-btn-active-border-color: #5a23c8;
                    }

                    .bd-mode-toggle {
                        z-index: 1500;
                    }

                    .bd-mode-toggle .dropdown-menu .active .bi {
                        display: block !important;
                    }
                </style>

                <!-- Custom styles for this template -->
                <script src="/js/color-modes.js"></script>
                <link href="/sidebars.css" rel="stylesheet">

                <main class="d-flex flex-nowrap">
                    <h1 class="visually-hidden">Sidebars examples</h1>

                    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
                        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <svg class="bi pe-none me-2" width="40" height="32">
                                <use xlink:href="#bootstrap" />
                            </svg>
                            <span class="fs-4">Sidebar</span>
                        </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link active" aria-current="page">
                                    <svg class="bi pe-none me-2" width="16" height="16">
                                        <use xlink:href="#home" />
                                    </svg>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <svg class="bi pe-none me-2" width="16" height="16">
                                        <use xlink:href="#speedometer2" />
                                    </svg>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <svg class="bi pe-none me-2" width="16" height="16">
                                        <use xlink:href="#table" />
                                    </svg>
                                    Orders
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <svg class="bi pe-none me-2" width="16" height="16">
                                        <use xlink:href="#grid" />
                                    </svg>
                                    Products
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link text-white">
                                    <svg class="bi pe-none me-2" width="16" height="16">
                                        <use xlink:href="#people-circle" />
                                    </svg>
                                    Customers
                                </a>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropdown">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                                <strong>mdo</strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>


                    <!-- // card -->
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="..." class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                </div>
                            </div>
                        </div>
                    </div>


            </div>
        </div>
    </div>

</body>


</html>