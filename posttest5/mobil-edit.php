<?php
session_start();
require 'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Cars Edit</title>
    <link rel="stylesheet" href="mobil.css">
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Cars Edit 
                            <a href="index6.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $mobil_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM mobil WHERE id='$mobil_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $mobil = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="mobil_id" value="<?= $mobil['id']; ?>">

                                    <div class="mb-3">
                                        <label>NAMA UNIT</label>
                                        <input type="text" name="name" value="<?=$mobil['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>BRAND UNIT</label>
                                        <input type="text" name="brand" value="<?=$mobil['brand'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>TAHUN UNIT</label>
                                        <input type="number" name="tahun" value="<?=$mobil['tahun'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>JARAK TEMPUH UNIT</label>
                                        <input type="number" name="jarak" value="<?=$mobil['jarak'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_mobil" class="btn btn-primary">
                                            Update                                         </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>