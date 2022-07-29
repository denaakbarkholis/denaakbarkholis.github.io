<?php

session_start();

require 'functions.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">

</head>

<body>
    <!--  page login-->
    <!-- halaman login -->
    <div class="page-login">
        <!-- box -->
        <div class="login">
            <!-- box-header -->
            <div class="login-header">
                Login
            </div>

            <div class="login-body">
                <!-- form login -->
                <?php  if(isset($_POST['login'])) {
                        $user = mysqli_real_escape_string($conn, $_POST['username']);
                        $pass = mysqli_real_escape_string($conn, $_POST['password']);

                       
                        $cek = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '".$user."' ");
                        
                        if( mysqli_num_rows($cek) > 0) {

                            $d = mysqli_fetch_object($cek);
                            
                            $_SESSION['login'] = true;
                            $_SESSION['id'] = $d->id; 
                            $_SESSION['uname'] = $d->nama; 
                            $_SESSION['ulevel'] = $d->level;
                                                       
                            // cek password
                            if (md5($pass) == $d->password) {
                            
                                echo "
                                <script>
                                    alert('Login berhasil!');
                                    document.location.href = 'index.php';
                                </script>
                            ";                      
                            
                            }else {  
                                echo '<div class="alert alert-error"> Password salah </div>';
                            
                                }
                            }
                            else {
                            echo '<div class="alert alert-error"> Username tidak ditemukan </div>';
                            }
                    }

                        $error = true;     
                ?>

                <form action="" method="post">
                    <div class="form-group">
                        <label for="username">Username :</label>
                        <input type="text" name="username" id="username" class="input-control">
                        <br>
                        <br>
                        <label for="password">Password :</label>
                        <input type="password" name="password" id="password" class="input-control">
                    </div>
                    <br>
                    <label for="remember"><input type="checkbox" name="remember"> Remember me </label>

                    <br><br>
                    <button type="submit" name="login" class="btn">Login</button>
                </form>
            </div>

            <!-- box footer -->
            <div class="login-footer">
                <a href="index.php">Halaman Utama</a>

            </div>
        </div>
    </div>
</body>

</html>