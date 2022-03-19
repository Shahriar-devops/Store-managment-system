<?php
require('connection.php');






$sql1 = "SELECT * FROM product";
$query1 = $conn->query($sql1);

$data_list = array();

while ($data1 = mysqli_fetch_assoc($query1)) {
    $product_id = $data1['product_id'];
    $product_name = $data1['product_name'];

    $data_list[$product_id] = $product_name;
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Spend Product</title>
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
                    <!---end of left-->
                    <div class="col-sm-9 border-start border-success">
                        <!---right bar-->
                        <div class="container p-4 m-4">
                        <?php
    $sql = "SELECT *FROM spend_product";

    $query = $conn->query($sql);
    echo "<table class='table table-success table-striped table-hover'><tr><th>Product Name</th><th>Ouentity</th><th>Entry Date</th><th>Action</th></tr>";
    while ($data = mysqli_fetch_assoc($query)) {
        $spend_product_id = $data['spend_product_id'];
        $spend_product_name = $data['spend_product_name'];
        $spend_product_quentity = $data['spend_product_quentity'];
        $spend_product_entry_date = $data['spend_product_entry_date'];

        echo "<tr>
        <td>$data_list[$spend_product_name]</td>
        <td>$spend_product_quentity</td>
        <td>$spend_product_entry_date</td>
        <td><a href='edit_spend_product.php?id=$spend_product_id'class='btn btn-success'>Edit</a></td>
        </tr>";
    }
    echo "</table>";
    ?>

                        </div>
                         <!--end of container-->
                    </div>
                    <!--end of right bar-->
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
