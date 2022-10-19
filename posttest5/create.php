<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Mobil Create</title>
    <link rel="stylesheet" href="mobil.css">
</head>
<body>
  
    <div class="container mt-5">    

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Mobil Add 
                            <a href="index6.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>NAMA UNIT</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>BRAND UNIT</label>
                                <input type="text" name="brand" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>TAHUN UNIT</label>
                                <input type="number" name="tahun" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>JARAK TEMPUH UNIT</label>
                                <input type="number" name="jarak" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_mobil" class="btn btn-primary">Save </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>