<?php
ob_start();
session_start();
    include "koneksi.php";
    $id_user        = mysqli_real_escape_string($conn, $_POST['id_user']);
    $password        = mysqli_real_escape_string($conn, md5($_POST['password']));
    $op             = $_GET['op'];

    if($op=="in"){
        $sql = mysqli_query($conn, "SELECT * FROM lms_user WHERE id_user='$id_user' AND password='$password'");
        if(mysqli_num_rows($sql)==1){
            $qry = mysqli_fetch_array($sql);
            $_SESSION['id_user']    = $qry['id_user'];
            $_SESSION['nama_user']    = $qry['nama_user'];
            $_SESSION['hak_akses']    = $qry['hak_akses'];
            $_SESSION['id_mahasiswa']    = $qry['id_mahasiswa'];
            
            if($qry['hak_akses']=="mahasiswa"){
                header("location:beranda.php");
            }
        }
        else{
            ?>
            <script language="JavaScript">
                alert('Username & password tidak sesuai');
                document.location='./';
            </script>
            <?php
        }
    }
    else if($op=="out"){
        unset($_SESSION['id_user']);
        unset($_SESSION['hak_akses']);
        header("location:./");
    }
?>