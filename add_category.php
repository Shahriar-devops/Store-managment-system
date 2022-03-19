<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'store_db';




$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
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
                            if (isset($_GET['category_name'])) {
                                $category_name = $_GET['category_name'];
                                $category_entrydate = $_GET['category_entrydate'];

                                $sql = "INSERT INTO category (category_name, category_entrydate)
                                VALUES ('$category_name','$category_entrydate')";


                                if ($conn->query($sql) == TRUE) {
                                    echo 'Data Inserted!';
                                } else {
                                    echo 'Data not Inserted!';
                                }
                            }



                            ?>
                            <form action="add_category.php" method="GET">
                                Category : <br>
                                <input type="text" name="category_name"><br><br>
                                Category EntryDate :<br>
                                <input type="date" name="category_entrydate"><br><br>
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
<!--

--->