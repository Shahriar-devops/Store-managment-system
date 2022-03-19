<?php
session_start();






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Managment System | SMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" integrity="sha384-3B6NwesSXE7YJlcLI9RpRqGf2p/EgVH8BgoKTaUrmKNDkHPStTQ3EyoYjCGXaOTS" crossorigin="anonymous">
</head>

<body>
    <div class="container bg-light">
        <div class="container-foulid border-bottom border-success">
            <!---topbar-->
            <?php include('topbar.php'); ?>
        </div>
        <!---topbar end-->
        <div class="container-foulid">
            <div class="row">
                <div class="col-sm-3 bg-light p-0 m-0">
                    <!---left bar-->
                    <?php include('leftbar.php'); ?>

                    <div class="col-sm-9 border-start border-success">
                        <!---right bar-->
                        <div class="row p-4">
                            <div class="col-sm-3">
                                <a href="add_category.php"><i class="fa-solid fa-folder-plus fa-5x text-success"></i></a>
                                <p>Add category</p>
                            </div>

                            <div class="col-sm-3">
                                <a href="list_of_category.php"><i class="fa-solid fa-folder-open fa-5x text-success"></i></a>
                                <p>Category List</p>
                            </div>
                            <div class="col-sm-3">
                                <a href="add_product.php"><i class="fa-solid fa-box-open fa-5x text-success"></i></a>
                                <p>Add Product</p>
                            </div>
                            <div class="col-sm-3">
                                <a href="list_of_product.php"><i class="fa-solid fa-bars-staggered fa-5x text-success"></i></a>
                                <p>Product List</p>
                            </div>
                        </div>
                        <hr />
                        <div class="row p-4">
                            <div class="col-sm-3">
                                <a href="add_store_product.php"><i class="fa-solid fa-trash-restore fa-5x text-success"></i></a>
                                <p>Store Product</p>
                            </div>
                            <div class="col-sm-3">
                                <a href="list_of_entry_product.php"><i class="fa-solid fa-box fa-5x text-success"></i></a>
                                <p>Store Product List</p>
                            </div>
                            <div class="col-sm-3">
                                <a href="add_spend_product.php"><i class="fa-solid fa-plus-circle fa-5x text-success"></i></a>
                                <p>Spend Product</p>
                            </div>
                            <div class="col-sm-3">
                                <a href="list_of_spend_product.php"><i class="fa-solid fa-window-restore fa-5x text-success"></i></a>
                                <p>Spend Product List</p>
                            </div>
                        </div>
                        <hr />
                        <div class="row p-4">
                            <div class="col-sm-3">
                                <a href="report.php"><i class="fa-solid fa-chart-bar fa-5x text-success"></i></a>
                                <p>Add User</p>
                            </div>
                            <div class="col-sm-3">

                            </div>
                            <div class="col-sm-3">

                            </div>
                            <div class="col-sm-3">

                            </div>
                        </div>
                        <hr />
                        <div class="row p-4">
                            <div class="col-sm-3">
                                <a href="add_users.php"><i class="fa-solid fa-user-plus  fa-5x text-success"></i></a>
                                <p>Add User</p>
                            </div>
                            <div class="col-sm-3">
                                <a href="list_of_users.php"><i class="fa-solid fa-users fa-5x text-success"></i></a>
                                <p>User List</p>
                            </div>
                            <div class="col-sm-3">

                            </div>
                            <div class="col-sm-3">

                            </div>
                        </div>
                    </div>
                </div>
                <!--end of leftbar-->
            </div>
            <!---end of row-->
        </div>
        <div class="container-foulid border-top border-success">
            <?php include('bottombar.php'); ?>
        </div>
    </div>
    <!---end of container-->


</body>

</html>

