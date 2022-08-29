<?php
    session_start();
    require 'koneksi.php';
?>

<?php include('include/header.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">

                <div class="img text-center fw-semibold font-monospace text-white">
                    <h2>Database Siswa</h2>
                    <img src="https://pbs.twimg.com/profile_images/2897661034/ce0e4eaa8cb006c5403db04a96be24cf_400x400.png" class=" p-5 rounded mx-auto d-block" width="300px">
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="card bg-secondary">
                            <a href="http://localhost/Crud_app/database.php" class="btn btn-secondary">Data Siswa</a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card bg-secondary">
                            <a href="#" class="btn btn-secondary">IDK</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<?php include('include/footer.php') ?>