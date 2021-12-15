<?php
ob_start();
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- custom css-->
    <link rel="stylesheet" href="./Resource/style.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font dari google -->
    <link href='https://fonts.googleapis.com/css?family=Public Sans' rel='stylesheet'>
    <!-- Judul -->
    <title>LMS FMIPA 2.0</title>
</head>

<body>
    <!-- gambar carrousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div id="gambar-login" class="carousel-item active img-fluid">
                <img src="./Resource/Image/login bg1_kujang 1318x669.jpg" class="d-block w-100" alt=" gambar kujang">
            </div>
            <div id="gambar-login" class="carousel-item img-fluid">
                <img src="./Resource/Image/login bg2_kujang party 1302x668.jpeg" class="d-block w-100" alt="gambar kujang malam-malam">
            </div>
            <div id="gambar-login" class="carousel-item img-fluid">
                <img src="./Resource/Image/login bg3_pakuan depan 1302x668.jpg" class="d-block w-100" alt="gambar depan pakuan ">
            </div>
        </div>
    </div>
    <!-- carousel end -->
    <!-- bahasa -->
    <div id="bahasa" class="btn-group" role="group">
        <button id="btnGroupDrop1" type="button" class="btn btn-$purple-600 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
            Indonesia
        </button>
        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <li><a class="dropdown-item" href="#">Indonesia</a></li>
            <li><a class="dropdown-item" href="#">English</a></li>
        </ul>
    </div>
    <!-- bahasa end -->
    <!-- header logo -->
    <div id="logo_fmipa">
        <img src="./Resource/Image/Batik header.png" style="position: absolute;
        width: 803.5px;
        height: 111.5px;
        left: -75px;
        top: 0px;
        filter: brightness(0.27);
        transform: rotate(179.69deg);" alt="gambar batik">
        <img src="./Resource/Image/3 stripe header.png" style="position: absolute;
        height: 113px;
        left: 609px;
        top: -1px;" alt="gambar strip">
        <img src="./Resource/Image/logo unpak.png" id="logo" alt="logo unpak">
        <p id="nama-univ" class="text-break">Universitas Pakuan<br>Fakultas Matematika dan Ilmu Pengetahuan Alam</p>

    </div>
    <!-- header end -->
    <!-- untuk login card -->
    <div id="login" class="card w-auto">
        <div class="card-body">
            <div style="padding: 22px 40px 34px 37px">
                <div style="padding: 0px 0px 10px 0px;">
                    <form action="login.php?op=in" method="POST">
                    <!--input-->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                    </svg>
                    <label for="exampleInputPassword1" class="form-label">Username</label>
                    <input id="form" class="form-control" type="text" name="id_user" size="20" placeholder="Masukkan Username" aria-label="default input example" required>
                    </tr>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                        <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                        <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                    </svg>
                    <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                    <input id="form" type="password" class="form-control" size="20" name="password" placeholder="Masukkan Password" id="exampleInputPassword1" required>
                </div>
            </div>
            <!--tombol-->
            <div class="d-grid gap-3 col-10 mx-auto" style="padding: 0px 12px 21px 12px;border: radius 10px;" :>
                <button class="btn btn-light" type="submit" name="login" style="border: radius 10px; width: 179px;">Masuk</button></a>
                <a href="Forgotpass.php"><button class="btn btn-light" type="button" style="border: radius 10px; width: 179px;">Lupa Password</button></a>
                </form>
            </div>
            <!-- sosmed-->
            <div class="container" style="text-align: center;">
                <a href="https://www.instagram.com/official_unpak/" class="fa fa-instagram"></a>
                <a href="https://www.facebook.com/unpak" class="fa fa-facebook"></a>
                <a href="https://www.youtube.com/channel/UCYXuJVgSbEUrDSwQMb7zamQ/videos" class="fa fa-youtube"></a>
                <a href="https://wa.me/628551111980" class="fa fa-whatsapp"></a>
            </div>
        </div>
    </div>
    <!--card end-->
    <!-- script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
