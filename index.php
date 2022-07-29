<?php
    include 'header.php';
?>
<!-- Konten -->
<div class="content">
    <div class="container">
        <div class="box">
            <div class="box-header">
                Dashboard

            </div>
            <div class="box-body">
                <h3>Selamat Datang, <?= $_SESSION['uname'] ?> di panel admin sekolah</h3>
            </div>
        </div>
    </div>
</div>
<!-- end konten -->

<?php
    include 'footer.php';
?>