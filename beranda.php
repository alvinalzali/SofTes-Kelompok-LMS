<?php
ob_start();
session_start();
if (!isset($_SESSION['id_user'])) {
    die("<b>Oops!</b> Access Failed.
        <p>Sistem Logout. Anda harus melakukan Login kembali.</p>
        <button type='button' onclick=location.href='./'>Back</button>");
}
if ($_SESSION['hak_akses'] != "mahasiswa") {
    die("<b>Oops!</b> Access Failed.
        <p>Anda Bukan Pegawai.</p>
        <button type='button' onclick=location.href='./'>Back</button>");
}
include "koneksi.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- custom css-->
    <link rel="stylesheet" href="./Resource/style.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- font dari google -->
    <link href='https://fonts.googleapis.com/css?family=Public Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Reem Kufi' rel='stylesheet'>
    <!-- Judul -->
    <title>Beranda LMS FMIPA 2.0</title>
</head>

<body>
    <!-- gambar carrousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>

        <div class="carousel-inner">
            <div id="gambar-beranda" class="carousel-item active img-fluid">
                <img src="./Resource/Image/dashboard bg2_kujang party 1302x668.jpeg" class="d-block w-100" alt=" gambar kujang">
            </div>
            <div id="gambar-beranda" class="carousel-item img-fluid">
                <img src="./Resource/Image/dashboard bg3_pakuan depan.jpg" class="d-block w-100" alt="gambar depan gedung univ pakuan">
            </div>
        </div>
    </div>
    <!-- carousel end -->
    <!-- untuk header -->
    <div>
        <div id="beranda-h" class="card">
            <div class="card-body">
                <img src="./Resource/Image/logo unpak.png" id="logo-beranda" alt="logo unpak">
                <p id="nama-univ-beranda">Universitas Pakuan<br>Fakultas Matematika dan Ilmu Pengetahuan Alam</p>
                <!-- Icon notif -->
                <div id="icon-h" class="card">
                    <div class="card-body" style="padding: 0px 0px 0px 0px;">
                        <div class="btn-group-me-1">
                            <div class="btn-group me-2" role="group" aria-label="Second group">
                                <button type="button" class="btn btn-outline-light" data-bs-toggle="collapse" data-bs-target="#collapsenotif" aria-expanded="false" aria-controls="collapsenotif">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"></path>
                                    </svg>
                                </button>

                                <button type="button" class="btn btn-outline-light" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
                                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                    </svg>
                                </button>
                            </div>
                            <div>
                                <div class="collapse" id="collapsenotif">
                                    <div id="content-notif" class="card">
                                        <table style="width: auto;
                                        border-bottom-style: ridge;
                                        border-bottom-color: rgba(255, 255, 255, 1);
                                        height: 36px;">
                                            <tr>
                                                <th>Daftar Tugas</th>
                                            </tr>
                                        </table>
                                        <div id="content-absen-tugas" class="card">
                                            <table style="width: auto;height: auto;margin: 2px 4px 10px 1px;">
                                                <tbody>
                                                    <tr>
                                                        <th style="padding: 8px 1px 12px 2px;">Absensi Hari Ini</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div id="content-absen" class="card" style="text-align: left;">
                                                                <table>
                                                                    <td style="word-break: normal;width: 151px;height: auto;">
                                                                        IMK - E (15.00-16.00 WIB)
                                                                    </td>
                                                                    <td><span class="badge bg-danger" style="font-size: 11px;">Belum</span></td>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div id="content-absen" class="card" style="text-align: left;">
                                                                <table>
                                                                    <td style="word-break: normal;width: 151px;height: auto;">
                                                                        IMK - E (15.00-16.00 WIB)
                                                                    </td>
                                                                    <td><span class="badge bg-danger" style="font-size: 11px;">Belum</span></td>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div id="content-absen" class="card" style="text-align: left;">
                                                                <table>
                                                                    <td style="word-break: normal;width: 151px;height: auto;">
                                                                        IMK - E (15.00-16.00 WIB)
                                                                    </td>
                                                                    <td><span class="badge bg-danger" style="font-size: 11px;">Belum</span></td>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div id="content-absen" class="card" style="text-align: left;">
                                                                <table>
                                                                    <td style="word-break: normal;width: 151px;height: auto;">
                                                                        IMK - E (15.00-16.00 WIB)
                                                                    </td>
                                                                    <td><span class="badge bg-danger" style="font-size: 11px;">Belum</span></td>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div id="content-absen" class="card" style="text-align: left;">
                                                                <table>
                                                                    <td style="word-break: normal;width: 151px;height: auto;">
                                                                        IMK - E (15.00-16.00 WIB)
                                                                    </td>
                                                                    <td><span class="badge bg-danger" style="font-size: 11px;">Belum</span></td>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table style="width: auto;height: auto;margin: 2px 4px 10px 1px;">
                                                <tr>
                                                    <th style="padding: 8px 1px 12px 2px;">Tugas</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div id="content-tugas" class="card" style="text-align: left;">
                                                            <table>
                                                                <td style="word-break: normal;width: 151px;height: auto;">
                                                                    IMK - E (15.00-16.00 WIB)
                                                                </td>
                                                                <td><span class="badge bg-danger" style="font-size: 11px;">Belum</span></td>
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div id="content-tugas" class="card" style="text-align: left;">
                                                            <table>
                                                                <td style="word-break: normal;width: 151px;height: auto;">
                                                                    IMK - E (15.00-16.00 WIB)
                                                                </td>
                                                                <td><span class="badge bg-danger" style="font-size: 11px;">Belum</span></td>
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div id="content-tugas" class="card" style="text-align: left;">
                                                            <table>
                                                                <td style="word-break: normal;width: 151px;height: auto;">
                                                                    IMK - E (15.00-16.00 WIB)
                                                                </td>
                                                                <td><span class="badge bg-danger" style="font-size: 11px;">Belum</span></td>
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- icon end-->
            <!-- profile notif -->
            <?php
            $tampilPeg    = mysqli_query($conn, "SELECT * FROM lms_mahasiswa WHERE id_mahasiswa='$_SESSION[id_mahasiswa]'");
            $peg    = mysqli_fetch_array($tampilPeg);
            ?>
            <div id="profile-h" class="card">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="background: rgba(255,255,255,0);
                color: white;
                text-align: left;
                border-width: 0px;
               padding: 14px 0px 0px 6px;
                /* margin: 0px 38px 0px 0px;*/">
                    <p><?= $peg['nama'] ?></p>
                    <img src="resource/image/<?= $peg['foto'] ?>" id="photo-user" alt="photo profile">
                </button>
                <div class="collapse" id="collapseExample">
                    <div id="content-profile" class="card card-body">
                        <!-- tombol -->
                        <div id="tombol-profile" class="card">
                            <button id="tom-pengaturan" type="button" class="btn btn-outline-light btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z" />
                                </svg> Pengaturan</button>
                            <a href="logout.php" onclick="return confirm('Yakin ingin logout dari lms?')">
                                <button id="tom-keluar" type="button" class="btn btn-outline-light btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg> Keluar</button>
                            </a>
                        </div>
                        <!-- tombol endd -->
                        <!-- profile nama & npm -->
                        <div id="content-nama-npm" class="card">
                            <p style="text-indent: 88px;word-break: normal;"><?= $peg['nama'] ?></p>
                            <p style="text-indent: 88px;word-break: normal;"><?= $peg['npm'] ?></p>
                            <img src="resource/image/<?= $peg['foto'] ?>" style="
                                width: 78px;
                                margin: -75px 0px 0px 0px;
                                height: auto;
                                border-radius: 40px;
                                " alt="photo profile">
                        </div>
                        <!-- profile nama & npm end -->
                        <!-- detail profile-->
                        <div id="content-detail-profile" class="card">
                            <table style="border-collapse: separate;">
                                <tr>
                                    <th>Status</th>
                                    <th>: <?= $peg['status'] ?></th>
                                </tr>
                                <tr>
                                    <th>Kelas</th>
                                    <th>: <?= $peg['kelas'] ?></th>
                                </tr>
                                <tr>
                                    <th>Semester</th>
                                    <th>: <?= $peg['semester'] ?></th>
                                </tr>
                                <tr>
                                    <th>Jurusan</th>
                                    <th>: <?= $peg['jurusan'] ?></th>
                                </tr>
                                <tr>
                                    <th>Wali Dosen</th>
                                    <th>: <?= $peg['wali_dosen'] ?></th>
                                </tr>
                            </table>
                        </div>
                        <!-- detail profile end-->

                    </div>
                </div>
            </div>
        </div>
        <!-- profile end-->

    </div>
    </div>
    </div>
    <!--header end-->
    <!--Mata Kuliah-->
    <div>
        <div id="matakuliah-h" class="card card-$purple-600">
            <?php

            //SQL query
            $sql = "SELECT ID_Dos,Nama_Dos,Matkul FROM Dosen ;";
            $result = mysqli_query($conn, $sql);
            $resultcheck = mysqli_num_rows($result);

            if ($resultcheck > 0) {
                // output data of each row
                while ($row = mysqli_fetch_array($result)) {
                    echo '
                <button class="Matkul_' . $row['ID_Dos'] . '" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMatkul" aria-expanded="false" aria-controls="collapseMatkul">
                <div class="Matkul' . $row['ID_Dos'] . '">
                    <p class="bu_fina">' . $row['Nama_Dos'] . '</p>
                    <div class="imk">' . $row['Matkul'] . '</div>
                </div>
                </button>';
                }
            } else {
                echo "Kosong";
            }
            ?>

        </div>
        <!--Mata Kuliah end-->
        <!--inf dosen-->
        <div>
            <div id="inf-dosen-h" class="card card-$purple-600">
                <div class="card-body">
                    <table style="font-size: 12px;width: 100%;">
                        <tr>
                            <th colspan="2" style="
                        text-align: center;
                        font-size: 21px;
                        padding-bottom: 16px;
                        font-family: 'Public Sans';
                        border-bottom-style: ridge;
                        border-bottom-color: black;
                        border-bottom-width: 2px;">
                                Informasi Dosen<br>Hari Ini</th>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;"><b>Nama Dosen </b></td>
                            <td style="padding-top: 20px;">: Bu Herfina</td>
                        </tr>
                        <tr>
                            <td><b>Mata Kuliah </b></td>
                            <td>: Interaksi Manusia dan Komputer</td>
                        </tr>
                        <tr>
                            <td><b>Jam </b></td>
                            <td>: 15.00 - 16.30 WIB</td>
                        </tr>
                        <tr>
                            <td><b>Keterangan </b></td>
                            <td>: Berhalangan</td>
                        </tr>
                        <tr>
                            <td><b>Tugas Pengganti </b></td>
                            <td>: Merangkum Bab 2</td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;"><b>Nama Dosen </b></td>
                            <td style="padding-top: 20px;">: Pak Agung</td>
                        </tr>
                        <tr>
                            <td><b>Mata Kuliah </b></td>
                            <td>: Sistem Digital Lanjut</td>
                        </tr>
                        <tr>
                            <td><b>Jam </b></td>
                            <td>: 13.00 - 14.30 WIB</td>
                        </tr>
                        <tr>
                            <td><b>Keterangan </b></td>
                            <td>: Berhalangan</td>
                        </tr>
                        <tr>
                            <td style="padding-bottom: 20px;"><b>Tugas Pengganti </b></td>
                            <td style="padding-bottom: 20px;">: Kerjakan soal no.1-4 Bab 6</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!--inf dosen end-->
        <!--inf akademik-->
        <div>
            <div id="inf-akademik-h" class="card card-$purple-600" style="padding: 1px 1px 1px 1px;">
                <div class="card-body">
                    <table id="tabel-akademik" style="font-size: 12px;width: 100%;font-family: 'Nunito';">
                        <tr>
                            <th colspan="2" style="
                        text-align: center;
                        font-size: 21px;
                        padding-bottom: 16px;
                        font-family: 'Public Sans';
                        border-bottom-style: ridge;
                        border-bottom-color: black;
                        border-bottom-width: 2px;">
                                Informasi Akademik<br>Semester Genap 2020-2021</th>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;"><b>Pembukaan Pelaporan Simak</b>
                                <br>08 Febuari 2021 - 08 Febuari 2021
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;"><b>Her-Registrasi (Pembayaran SPP & Aktivasi SIMAK)</b><br>
                                08 Febuari 2021 - 20 Febuari 2021</td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;"><b>Pembuatan jadwal perkuliahan</b><br>
                                08 Febuari 2021 - 14 Febuari 2021</td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;"><b>Perwalian dan pengisian KRS (KRS Online)</b><br>
                                15 Febuari 2021 - 24 Febuari 2021</td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;"><b>Wisuda Gel I</b><br>
                                24 Febuari 2021 - 24 Febuari 2021</td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;"><b>Perkuliahan</b><br>
                                22 Febuari 2021 - 24 Juni 2021</td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;"><b>Ujian Tengah Semester GENAP</b><br>
                                19 April 2021 - 30 April 2021</td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;"><b>Wisuda Gel II</b><br>
                                30 Juni 2021 - 30 Juni 2021</td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;"><b>Ujian Akhir Semester GENAP</b><br>
                                21 Juni 2021 - 03 Juli 2021</td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;"><b>Libur Hari Raya Idul Fitri</b><br>
                                10 Mei 2021 - 17 Mei 2021</td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;"><b>Libur Semester Genap</b><br>
                                05 Juli 2021 - 04 September 2021</td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;"><b>Penginputan Nilai</b><br>
                                05 Juli 2021 - 10 Juli 2021</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        <!--inf akademik end-->
        <!--inf online-->
        <div>
            <div id="inf-online-h" class="card card-$purple-600">
                <div style="
            padding: 0px 0px 0px 0px;
            height: 0px;
            text-indent: 0px;
            line-height: 24px;
            text-align: center;
            font-size: 11px;">
                    <p>Online (1)</p>
                </div>
            </div>
        </div>
        <!--inf online end-->
        <!-- collapse matkul -->
        <div class="collapse" id="collapseMatkul">
            <div class="card" id="tombol-close">
                <button type="button" class="btn-close btn-close-white" data-bs-toggle="collapse" data-bs-target="#collapseMatkul" aria-expanded="false" aria-controls="collapseMatkul" aria-label="Close"></button>
            </div>
            <img src="./Resource/Image/dosen_bu fina crop.jpeg" style="
                               width: 214px;
                               height: 279px;
                               margin: 10px -3px -1px 18px;
                               border-radius: 40px;
                                " alt="photo profile dosen">
            <div class="card" id="deskripsi-dosen">
                <table style="
                font-family: 'Reem Kufi';
                align-items: center;
                vertical-align: middle;
                height: 100%;
                border-radius: 12px;
                color:black">
                    <tr>
                        <td>
                            <?php
                            $sql = "SELECT Nama_Dos,No_WA FROM Dosen WHERE ID_Dos= 2;";
                            $result = mysqli_query($conn, $sql);
                            $resultcheck = mysqli_num_rows($result);

                            if ($resultcheck > 0) {
                                // output data of each row
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo '
                            <table style="margin-left: 17px; width: 135%;">
                            <tr>
                            
                                <td>Nama</td>
                                <td>: ' . $row['Nama_Dos'] . '</td>
                            </tr>
                            <tr>
                                <td>Jabatan</td>
                                <td>: -</td>
                            </tr>
                            <tr>
                                <td>Whatsapp</td>
                                <td>: ' . $row['No_WA'] . '</td>
                            </tr>
                            <tr>
                                <td>E-mail</td>
                                <td>: -</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>: -</td>
                            </tr>
                            <tr>
                                <td> </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td>Jam MatKul</td>
                                <td>: Selasa, 15.00 - 16.40</td>
                            </tr>
                            </table>';
                                }
                            } else {
                                echo "Kosong";
                            }
                            ?>
                        </td>
                        <td>
                            <table style="text-align: center; margin: 7px 40px 7px 92px;">
                                <tr style="font-size: 36px;font-weight: bold;">
                                    <td>Interaksi Manusia dan Komputer</td>
                                </tr>
                                <tr>
                                    <td>Interaksi manusia dan komputer adalah disiplin ilmu yang mempelajari
                                        hubungan antara manusia dan komputer yang meliputi perancangan,
                                        evaluasi, dan implementasi antarmuka pengguna komputer agar mudah
                                        digunakan oleh manusia. Ilmu ini berusaha menemukan cara yang paling
                                        efisien untuk merancang pesan elektronik.</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
            <!-- daftar materi -->
            <div class="accordion accordion-flush" id="accordionFlushExample" style="margin: 26px 52px 0px 19px;">
                <!-- materi1-->
                <div class="accordion-item" id="judul-materi">
                    <h2 class="accordion-header" id="judul-materi" id="materi1" style="margin: 0;">
                        <button class="accordion-button collapsed" id="judul-materi" type="button" style="margin: 0;" data-bs-toggle="collapse" data-bs-target="#materi1" aria-expanded="false" aria-controls="materi1">
                            Materi Ke-1 : Pendahuluan
                            <card id="kotaktersedia">
                                <p id="sedia">Tersedia</p>
                            </card>
                        </button>
                    </h2>
                    <div id="materi1" class="accordion-collapse collapse" aria-labelledby="materi1" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body" id="body-materi">
                            <!-- textnya -->
                            <p id="judul_materi">Judul Materi : Pendahuluan
                                Materi :</p>
                            <!-- link materi -->
                            <a href="https://drive.google.com/file/d/1iT89zo2-GVs1UDhfMPWY4OnEzXwFDpIT/view?usp=sharing" id="link_materi">
                                <!-- logo link materinya -->
                                <img src="./Resource/image/logo pdf.svg" id="logopdf" alt="logo pdf">pendahuluan.pdf
                            </a>

                            <!-- ss preview -->
                            <img src="./Resource/image/preview materi.svg" id="ss" alt="ss materi">

                            <!-- card -->
                            <button id="kotakabsen" type="button" data-bs-toggle="collapse" data-bs-target="#absensi" aria-expanded="false" aria-controls="absensi">
                                <p id="absen">Absen</p>
                            </button>
                            <div class="collapse" id="absensi" style="
                        position: absolute;
                        width: 442px;
                        height: 130px;
                        top: 395px;
                        right: 78px;
                        z-index: 5;
                        background: rgba(57, 57, 57, 0.96);
                        border-radius: 12px;">
                                <div class=" card" style="
                            position: absolute;
                            width: 442px;
                            height: 130px;
                            z-index: 5;
                            background: rgba(57, 57, 57, 0.96);
                            border-radius: 12px;">
                                    <p id="textabsen">Silakan Isi Absensi</p>
                                    <button class="hadir">
                                        <p id="txthadir">Hadir</p>
                                    </button>
                                    <button class="telat">
                                        <p id="txttelat">Telat</p>
                                    </button>
                                    <button class="izin">
                                        <p id="txtizin">Izin</p>
                                    </button>
                                    <button class="alpha">
                                        <p id="txtalpha">Alpha</p>
                                    </button>
                                    <button class="submit" type="button" data-bs-toggle="collapse" data-bs-target="#absensi" aria-expanded="false" aria-controls="absensi">
                                        <p id="txtsubmit">Submit</p>
                                    </button>
                                </div>
                            </div>

                            <!-- taskbar tugas -->

                            <body>
                                <div id="taskbar">
                                    Tugas!! T1 Silahkan anda buat telaah materi pada pertemuan ini, dan buat presentasinya dalam format pptx! Assignment : Tugas individu, silahkan upload sebelum masa waktu pengumpulan ditutup
                                    <button id="unggah" type="button" data-bs-toggle="collapse" data-bs-target="#unggah-tugas" aria-expanded="false" aria-controls="unggah-tugas">
                                        <p id="text_unggah">Unggah</p>
                                    </button>
                                    <div class="collapse" style="position: absolute;top: 0px;
                               left: 0px;
                               width: 100%;
                               height: 119px;
                               background: white;
                               border-radius: 12px;" id="unggah-tugas">
                                        <div id="form-unggah" style="height: 108px;
                               width: 810px;
                               margin: 11px 0px 0px 12px;">
                                            <label for="formFileSm" style="display: contents;
                               line-height: 33px;">
                                                Masukkan Tugas Anda</label>
                                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                                        </div>
                                        <button id="unggah" type="button" data-bs-toggle="collapse" data-bs-target="#unggah-tugas" aria-expanded="false" aria-controls="unggah-tugas">
                                            <p id="text_unggah">Kirim</p>
                                        </button>
                                        <div class="card" style="position: absolute;
                               top: 7px;
                               right: 7px;
                               border-width: 0px;">
                                            <button type="button" class="btn-close" data-bs-toggle="collapse" data-bs-target="#unggah-tugas" aria-expanded="false" aria-controls="unggah-tugas"></button>
                                        </div>
                                    </div>
                                </div>

                            </body>
                        </div>
                    </div>
                </div>
                <!-- materi2-->
                <div class="accordion-item" id="judul-materi">
                    <h2 class="accordion-header" id="judul-materi" id="materi2" style="margin: 0;">
                        <button class="accordion-button collapsed" id="judul-materi" type="button" style="margin: 0;" data-bs-toggle="collapse" data-bs-target="#materi2" aria-expanded="false" aria-controls="materi2">
                            Materi ke-2
                        </button>
                    </h2>
                    <div id="materi2" class="accordion-collapse collapse" aria-labelledby="materi2" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <!-- materi2-->
                <div class="accordion-item" id="judul-materi">
                    <h2 class="accordion-header" id="judul-materi" id="materi2" style="margin: 0;">
                        <button class="accordion-button collapsed" id="judul-materi" type="button" style="margin: 0;" data-bs-toggle="collapse" data-bs-target="#materi2" aria-expanded="false" aria-controls="materi2">
                            Materi ke-2
                        </button>
                    </h2>
                    <div id="materi2" class="accordion-collapse collapse" aria-labelledby="materi2" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <!-- materi2-->
                <div class="accordion-item" id="judul-materi">
                    <h2 class="accordion-header" id="judul-materi" id="materi2" style="margin: 0;">
                        <button class="accordion-button collapsed" id="judul-materi" type="button" style="margin: 0;" data-bs-toggle="collapse" data-bs-target="#materi2" aria-expanded="false" aria-controls="materi2">
                            Materi ke-2
                        </button>
                    </h2>
                    <div id="materi2" class="accordion-collapse collapse" aria-labelledby="materi2" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <!-- materi2-->
                <div class="accordion-item" id="judul-materi">
                    <h2 class="accordion-header" id="judul-materi" id="materi2" style="margin: 0;">
                        <button class="accordion-button collapsed" id="judul-materi" type="button" style="margin: 0;" data-bs-toggle="collapse" data-bs-target="#materi2" aria-expanded="false" aria-controls="materi2">
                            Materi ke-2
                        </button>
                    </h2>
                    <div id="materi2" class="accordion-collapse collapse" aria-labelledby="materi2" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <!-- materi2-->
                <div class="accordion-item" id="judul-materi">
                    <h2 class="accordion-header" id="judul-materi" id="materi2" style="margin: 0;">
                        <button class="accordion-button collapsed" id="judul-materi" type="button" style="margin: 0;" data-bs-toggle="collapse" data-bs-target="#materi2" aria-expanded="false" aria-controls="materi2">
                            Materi ke-2
                        </button>
                    </h2>
                    <div id="materi2" class="accordion-collapse collapse" aria-labelledby="materi2" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <!-- materi2-->
                <div class="accordion-item" id="judul-materi">
                    <h2 class="accordion-header" id="judul-materi" id="materi2" style="margin: 0;">
                        <button class="accordion-button collapsed" id="judul-materi" type="button" style="margin: 0;" data-bs-toggle="collapse" data-bs-target="#materi2" aria-expanded="false" aria-controls="materi2">
                            Materi ke-2
                        </button>
                    </h2>
                    <div id="materi2" class="accordion-collapse collapse" aria-labelledby="materi2" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <!-- materi2-->
                <div class="accordion-item" id="judul-materi">
                    <h2 class="accordion-header" id="judul-materi" id="materi2" style="margin: 0;">
                        <button class="accordion-button collapsed" id="judul-materi" type="button" style="margin: 0;" data-bs-toggle="collapse" data-bs-target="#materi2" aria-expanded="false" aria-controls="materi2">
                            Materi ke-2
                        </button>
                    </h2>
                    <div id="materi2" class="accordion-collapse collapse" aria-labelledby="materi2" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <!-- materi2-->
                <div class="accordion-item" id="judul-materi">
                    <h2 class="accordion-header" id="judul-materi" id="materi2" style="margin: 0;">
                        <button class="accordion-button collapsed" id="judul-materi" type="button" style="margin: 0;" data-bs-toggle="collapse" data-bs-target="#materi2" aria-expanded="false" aria-controls="materi2">
                            Materi ke-2
                        </button>
                    </h2>
                    <div id="materi2" class="accordion-collapse collapse" aria-labelledby="materi2" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <!-- materi2-->
                <div class="accordion-item" id="judul-materi">
                    <h2 class="accordion-header" id="judul-materi" id="materi2" style="margin: 0;">
                        <button class="accordion-button collapsed" id="judul-materi" type="button" style="margin: 0;" data-bs-toggle="collapse" data-bs-target="#materi2" aria-expanded="false" aria-controls="materi2">
                            Materi ke-2
                        </button>
                    </h2>
                    <div id="materi2" class="accordion-collapse collapse" aria-labelledby="materi2" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <!-- materi2-->
                <div class="accordion-item" id="judul-materi">
                    <h2 class="accordion-header" id="judul-materi" id="materi2" style="margin: 0;">
                        <button class="accordion-button collapsed" id="judul-materi" type="button" style="margin: 0;" data-bs-toggle="collapse" data-bs-target="#materi2" aria-expanded="false" aria-controls="materi2">
                            Materi ke-2
                        </button>
                    </h2>
                    <div id="materi2" class="accordion-collapse collapse" aria-labelledby="materi2" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <!-- materi2-->
                <div class="accordion-item" id="judul-materi">
                    <h2 class="accordion-header" id="judul-materi" id="materi2" style="margin: 0;">
                        <button class="accordion-button collapsed" id="judul-materi" type="button" style="margin: 0;" data-bs-toggle="collapse" data-bs-target="#materi2" aria-expanded="false" aria-controls="materi2">
                            Materi ke-2
                        </button>
                    </h2>
                    <div id="materi2" class="accordion-collapse collapse" aria-labelledby="materi2" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <!-- materi2-->
                <div class="accordion-item" id="judul-materi">
                    <h2 class="accordion-header" id="judul-materi" id="materi2" style="margin: 0;">
                        <button class="accordion-button collapsed" id="judul-materi" type="button" style="margin: 0;" data-bs-toggle="collapse" data-bs-target="#materi2" aria-expanded="false" aria-controls="materi2">
                            Materi ke-2
                        </button>
                    </h2>
                    <div id="materi2" class="accordion-collapse collapse" aria-labelledby="materi2" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>

            </div>
            <!-- daftar materi end-->
        </div>
        <!-- collapse matkul end -->

        <!-- script-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>