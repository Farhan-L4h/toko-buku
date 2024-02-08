<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Form Kategori</title>

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
                        <form action="{{route ('kategori.store')}}" method="post">

                            @csrf
                            <div class="card p-5 shadow">
                                <div class="d-flex">
                                    <h5 class="txt-center">Tambah Kategori</h5>
                                </div>

                                <!-- kategori -->
                                <div class="input-group flex-wrap m-2">
                                    <span class="input-group-text" id="addon-wrapping">Nama Kategori</span>
                                    <input type="text" name="kategori" value="{{ old('kategori') }}" class="form-control @error('kategori') is-invalid @enderror" placeholder="Masukan Kategori Baru" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>

                                <!-- error notif -->
                                @error('kategori')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="d-flex p-2">
                                    <a class="mt-2 " href="">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </a>
                                    <a class="mt-2 ms-1" href="">
                                        <button type="reset" class="btn btn-danger">cancel</button>
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