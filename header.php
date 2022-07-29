<?php
    session_start();
    if( !isset($_SESSION["login"])) {
        echo "
        <script>
            alert('Harap login dahulu!');
            document.location.href = 'login.php';
        </script>
    "; 
    }
  
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Botstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- my CSS -->
    <link rel="stylesheet" href="assets/style.css" />

    <title>Halaman Admin | Sekolah</title>
</head>

<body>
    <!-- Navigasi Bar -->
    <div class="navbar">
        <div class="container">
            <h2><a class="nav-brand float-left" href="index.php">Nama Sekolah</a></h2>

            <ul class="nav-menu float-left">
                <li>
                    <a href="index.php">Dashboard</a>
                </li>
                <li>
                    <a href="pengguna.php">Pengguna</a>
                </li>
                <li>
                    <a href="rombel.php">Rombel</a>
                </li>
                <li>
                    <a href="informasi.php">Informasi</a>
                </li>

                <!-- sub menu -->
                <li>
                    <a href="#">Pengaturan<i class="bi bi-caret-down" style="color: white;"></i></i></a>
                    <ul class="dropdown">
                        <li><a href="profil.php">Profil Yayasan</a></li>
                        <li><a href="kepsek.php">Kepala Yayasan</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"> <?= $_SESSION['uname'].' | '. $_SESSION['ulevel'];?> <i class="bi bi-caret-down"
                            style="color: white;"></i></i></a>
                    <ul class="dropdown">
                        <li><a href="ubahPass.php">Ubah Password</a></li>
                        <li><a href="logout.php">Keluar</a></li>
                    </ul>
                </li>
            </ul>
            <div clear="clearfix"></div>
        </div>
    </div>
    <!-- end navbar -->