<?php
    include 'functions.php';
    include 'header.php';

    Session_start();
?>

<!-- Konten -->
<div class="content">
    <div class="container">
        <div class="box">
            <div class="box-header">
                Tambah Pengguna

            </div>

            <div class="box-body">

                <form action="" method="post">
                    <div class="form-group">
                        <div>
                            <label for="nama">Nama : </label>
                            <input type="text" name="nama" class="input-control" required>
                        </div>
                        <br>
                        <div>
                            <label for="user">Username: </label>
                            <input type="text" name="user" class="input-control" required>
                        </div>
                        <br>
                        <div>
                            <label>Level</label>
                            <select name="level">
                                <option>Pilih</option>
                                <option>Super Admin</option>
                                <option>Admin</option>
                            </select>
                        </div>
                        <br>
                        <div>
                            <button type="submit" name="submit"
                                style="padding: 8px; color : white; background-color : #09920f; font-weight:bold; border: none">Tambah
                                pengguna</button>

                            <button type="button" class="btn" style="background-color: silver;"
                                onclick="location = 'pengguna.php'">Kembali</button>
                        </div>

                </form>

                <?php
                if (isset($_POST["submit"])) {
                    // simpan data baru
                   
                    $nama   = htmlspecialchars(ucwords($_POST['nama'])) ;
                    $user   = htmlspecialchars($_POST['user']);
                    $level  = $_POST['level'];
                    $pass   = '12345';            
                
	            // tambahkan user baru ke database	
                $tambah = mysqli_query($conn, "INSERT INTO pengguna
				VALUES (
                    null, 
                    '".$nama."', 
                    '".$user."', 
                    '".MD5($pass)."', 
                    '".$level."',
                    null,
                    null
                )
                ");  

                if($tambah) {
                    echo "<script>
                    alert('Pengguna berhasil ditambahkan')
                 </script>";
                }
                else {
                    echo "<script>
                    alert('Pengguna gagal ditambahkan')
                 </script>";
                 mysqli_error($conn);
                }

                }
                         
    
                ?>
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>