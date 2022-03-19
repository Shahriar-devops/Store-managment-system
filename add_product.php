<?php
require('connection.php');





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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
                            if (isset($_GET['product_name'])) {
                                $product_name = $_GET['product_name'];
                                $product_category = $_GET['product_category'];
                                $product_code = $_GET['product_code'];
                                $product_entry_date = $_GET['product_entry_date'];
                                $sql = "INSERT INTO product (product_name,product_category,product_code,product_entry_date)
         VALUES ('$product_name','$product_category',' $product_code', '$product_entry_date')";
                                if ($conn->query($sql) == TRUE) {
                                    echo 'Data Inserted!';
                                } else {
                                    echo 'Data not Inserted!';
                                }
                            }
                            ?>
                            <?php
                            $sql = "SELECT * FROM category";
                            $query = $conn->query($sql);
                            ?>
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
                                Product :<br>
                                <input type="text" name="product_name"><br><br>
                                Product Category :<br>
                                <select name="product_category">
                                    <?php
                                    while ($data = mysqli_fetch_array($query)) {
                                        $category_id = $data['category_id'];
                                        $category_name = $data['category_name'];

                                        echo "<option value='$category_id'> $category_name</option>";
                                    }
                                    ?>
                                </select><br><br>
                                Product Code :<br>
                                <input type="text" name="product_code"><br><br>
                                Product Entry Date :<br>
                                <input type="date" name="product_entry_date"><br><br>
                                <input type="submit" value="submit" class="btn btn-success">
                            </form>
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