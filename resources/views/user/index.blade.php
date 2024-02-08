<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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

<body>


    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/user">FARHAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <a href="fa fa-user"></a>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">usename</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Setings</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- carousel -->
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset ('image\banner\banner 3.jpeg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset ('image\banner\banner 3.jpeg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset ('image\banner\banner 3.jpeg')}}" class="d-block w-100" alt="...">
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

    <!-- content -->

    <div class="judul-barang m-5">
        <h5 class="text-center">Daftar Barang</h5>
    </div>

    <!-- tampilan barang -->
    <div class="container d-flex" style="justify-content: center;">

        <div class="barang card p-1">


            <style>
                .barang {
                    justify-content: center;
                    display: flex;
                    flex-direction: row;
                    flex-wrap: wrap;
                }
            </style>

            <!-- card barang -->
            @forelse($renders as $render)
            @csrf
            <div class="card mb-3 m-2" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{asset ('image\barang\buku1.jpeg')}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-1 m-1">
                            <h5 class="card-title">{{$render -> nama_barang}}</h5>
                            <p class="card-text">{{$render -> deskripsi}}</p>
                            <p class="card-text m-0"><b>{{$render -> harga}}</b></p>
                            <p class="card-text">Stock:<b class="txt-primary">{{$render -> stock}}</b></p>
                            <a href="#"><button class="btn btn-primary">Beli Sekarang</button></a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="alert alert-danger">
                Data Belum Tersedia.
            </div>
            @endforelse



        </div>
    </div>

    

</body>


</html>