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

    <title>Mobil CRUD</title>
    <link rel="stylesheet" href="mobil.css">
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Mobil Details
                            <a href="create.php" class="btn btn-primary float-end">Add Mobil</a>
                            <a href="index1.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAMA UNIT</th>
                                    <th>BRAND UNIT</th>
                                    <th>TAHUN UNIT</th>
                                    <th>JARAK TEMPUH UNIT</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM mobil";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $mobil)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $mobil['id']; ?></td>
                                                <td><?= $mobil['name']; ?></td>
                                                <td><?= $mobil['brand']; ?></td>
                                                <td><?= $mobil['tahun']; ?></td>
                                                <td><?= $mobil['jarak']; ?></td>
                                                <td>
                                                    <a href="mobil-view.php?id=<?= $mobil['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="mobil-edit.php?id=<?= $mobil['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_mobil" value="<?=$mobil['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>