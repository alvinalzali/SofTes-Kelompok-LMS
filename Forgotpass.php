<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- costume css-->
    <link rel="stylesheet" href="./Resource/style.css">

    <!-- Judul -->
    <title>LMS FMIPA 2.0</title>
</head>

<body>
    <!--gambar carrousel -->
    <div id="fp-carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div id="fp-gambar-beranda" class="carousel-item active img-fluid">
                <img src="./Resource/Image/login bg1_kujang 1318x669.jpg" class="d-block w-100" alt="gambar kujang">
            </div>
            <div id="fp-gambar-beranda" class="carousel-item img-fluid">
                <img src="./Resource/Image/login bg2_kujang party 1302x668.jpeg" class="d-block w-100" alt="gambar kujang malam-malam">
            </div>
            <div id="fp-gambar-beranda" class="carousel-item img-fluid">
                <img src="./Resource/Image/login bg3_pakuan depan 1302x668.jpg" class="d-block w-100" alt="gambar depan pakuan ">
            </div>
        </div>
    </div>
    <!-- carrousel end-->
    <!-- bahasa -->
    <div id="fp-bahasa" class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-$purple-600 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
            Indonesia
        </button>
        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <li><a class="dropdown-item" href="#">Indonesia</a></li>
            <li><a class="dropdown-item" href="#">English</a></li>
        </ul>
    </div>
    <!-- bahasa end -->
    <!-- header-card -->
    <div id="fp-forgot-password-header" class="card w-auto">

        <div class="card-body">
            <p class="card-text">Untuk mereset password Anda, masukkan nama pengguna atau alamat email Anda di bawah.
                Jika kami dapat menemukan data Anda di database, email akan dikirimkan ke alamat email Anda,
                dengan instruksi bagaimana untuk mendapatkan akses kembali.
                </svg>
                <label for="inputemailornpm">
                    <input id="fp-form" type="emailornpm" class="form-control" size="20" name="emailornpm" placeholder="Masukkan Email atau NPM" id="emailornpm" required>
        </div>
        <!--card tombol-->
        <div id="fp-card-tombol" class="card w-auto">
            <div class="card-body">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="./forgotsuccess.php"><button class="btn btn-light" type="button">Kirim</button></a>
                    <a href="./index.php"><button class="btn btn-light" type="button">Kembali</button></a>
                </div>
            </div>
            <!--card tombol end-->
        </div>
        <!-- header-end-->



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>