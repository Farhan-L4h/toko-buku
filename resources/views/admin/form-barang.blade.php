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

                        <!-- form-->
                        <form action="{{route ('barang.store2')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card p-5 shadow">
                                <div class="d-flex">
                                    <h5 class="txt-center">Tambah Barang</h5>
                                </div>

                                <!-- gambar -->
                                <div class="input-group mb-3 m-2">
                                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                    <input name="image" value="{{old ('image') }}" type="file" class="form-control @error('image') is-invalid @enderror" id="inputGroupFile01">
                                </div>

                                <!-- error notif -->
                                @error('image')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror


                                <!-- name barang -->
                                <div class="input-group flex-wrap m-2">
                                    <span class="input-group-text" id="addon-wrapping">Nama Barang</span>
                                    <input type="text" name="nama_barang" value="{{old ('nama_barang')}}" class="form-control @error('nama_barang') is-invalid @enderror" placeholder="Masukan Nama Barang" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>

                                <!-- error notif -->
                                @error('nama_barang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror

                                <!-- kategori -->
                                <div class="input-group mb-3 m-2">
                                    <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                                    <select name="id_kategori" class="form-select" id="inputGroupSelect01">
                                        @foreach ($kategoris as $kategori)
                                        <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- harga -->
                                <div class="input-group flex-wrap m-2">
                                    <span class="input-group-text" id="addon-wrapping">Harga</span>
                                    <input value="{{old ('harga')}}" name="harga" type="number" class="form-control @error('harga') is-invalid @enderror" placeholder="Masukan Harga Barang" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>

                                <!-- error notif -->
                                @error('harga')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror

                                <!-- stock -->
                                <div class="input-group flex-wrap m-2">
                                    <span class="input-group-text" id="addon-wrapping">Stock</span>
                                    <input type="number" value="{{old ('stock')}}" name="stock" class="form-control @error('stock') is-invalid @enderror" placeholder="Masukan Stock Barang" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>

                                <!-- error notif -->
                                @error('stock')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror

                                <!-- deksripsi -->
                                <div class="input-group felx-warp m-2">
                                    <span class="input-group-text">deskripsi</span>
                                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" aria-label="With textarea">{{old('deskripsi')}}</textarea>
                                </div>

                                <!-- error notif -->
                                @error('deskripsi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror


                                <div class="d-flex p-2">
                                    <a class="mt-2 " href="">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </a>
                                    <a class="mt-2 ms-1" href="/admin.tmb-barang">
                                        <button type="cancel" class="btn btn-danger">cancel</button>
                                    </a>
                                </div>

                            </div>
                        </form>

                    </div>

                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>