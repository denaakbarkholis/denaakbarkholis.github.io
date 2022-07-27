<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale-1.0">
    <title>Document</title>

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <!--  bootsrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- my style -->
    <link rel="stylesheet" href="assets/style.css">

</head>


<body>

    <?php
  include 'sidebar.php';
    ?>

    <section>

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
                        <h3>Selamat Datang, di panel admin sekolah</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- end konten -->

        <?php
  include 'footer.php';
    ?>

    </section>



</body>


</html>