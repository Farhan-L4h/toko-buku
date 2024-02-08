<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Boostsrap local -->
    <link rel="stylesheet" href="/css/-grid.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- JavaScript Bundle with Popper -->
    <script src="/js/bootstrap.bundle.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/bootstrap.js.map"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="/css/style.css">

</head>
<!-- NAVBAR -->

<body style="background-color: lightgray;">

    <!-- navbar -->
    @include('admin.layout.navbar')

    <div id="content">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- content -->

                        <!-- search bar -->

                        <div class="d-flex justify-content-center m-4">
                            <div class="col-3">
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </div>

                        <div class="ms-5 d-flex mb-1">
                            <a href="/admin.tmb-barang" class=""><button class="btn btn-primary">TAMBAH DATA</button></a>
                        </div>


                        <div class="card m-5 shadow-sm">

                            <div class="card-body shadow-sm rounded">
                                <h3 class="text-center">DATA BARANG</h3>

                                <!-- tabel -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id Barang</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Kategori</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($barangs as $barang)
                                        <tr>
                                            <th>{{$barang ->id}}</th>
                                            <td>{{$barang -> nama_barang}}</td>
                                            <td>{{$barang -> kategoris -> nama_kategori ?? ''}}</td>
                                            <td>{{$barang -> harga}}</td>
                                            <td>{{$barang -> stock}}</td>
                                            <td>{{$barang -> deskripsi}}</td>
                                        </tr>
                                        
                                        @empty
                                        <div class="alert alert-danger">
                                            Data Belum Tersedia.
                                        </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>


</html>