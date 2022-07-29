<?php
    include 'functions.php';
    include 'header.php';
?>

<div class="content">
    <div class="container">
        <div class="box">
            <div class="box-header">
                Pengguna

            </div>

            <div class="box-body">
                <a href="tambah-p.php" style="color: green;"><i class="bi bi-plus" style="color : green;"></i>Tambah</a>
                <br><br>
                <table class="tabel">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        $no = 1;
                        $pengguna = mysqli_query($conn, "SELECT *FROM pengguna ORDER BY id DESC");
                        if(mysqli_num_rows($pengguna) > 0 ) {
                            while($p = mysqli_fetch_array($pengguna)) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $p['nama'] ?></td>
                            <td><?= $p['username'] ?></td>
                            <td><?= $p['level'] ?></td>
                            <td>
                                <a href="edit.php?id= <?= $p['id']?>" title="Edit data"><i class="bi bi-pencil-fill"
                                        style="color: orange;"></i></a> |
                                <a href="hapus.php?id= <?= $p['id']?>" onclick="return confirm('Yakin ingin hapus?')"
                                    title="Hapus data"><i class="bi bi-trash-fill" style="color: red;"></i></a>
                            </td>
                        </tr>
                        <?php  } } else {?>
                        <tr>
                            <td colspan="5">Data tidak ditemukan</td>
                        </tr>
                        <?php } ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>