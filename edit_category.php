<?php
require('connection.php');


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
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
    if (isset($_GET['id'])) {
        $getid = $_GET['id'];

        $sql =  "SELECT * FROM category WHERE category_id=$getid";

        $query = $conn->query($sql);
        $data = mysqli_fetch_assoc($query);
        $category_id = $data['category_id'];
        $category_name = $data['category_name'];
        $category_entrydate = $data['category_entrydate'];
    }

    if (isset($_GET['category_name'])) {
        $new_category_name = $_GET['category_name'];
        $new_category_entrydate = $_GET['category_entrydate'];
        $new_category_id = $_GET['category_id'];

        $sql1 = "UPDATE category SET
         category_name='$new_category_name',
          category_entrydate='$new_category_entrydate' WHERE category_id=$new_category_id";

        if ($conn->query($sql1) == TRUE) {
            echo 'Update Successfull!';
        } else {
            echo 'Not update';
        }
    }


    ?>
    <form action="edit_category.php" method="GET">
        Category : <br>
        <input type="text" name="category_name" value="<?php echo $category_name ?>"><br><br>
        Category EntryDate :<br>
        <input type="date" name="category_entrydate" value="<?php echo $category_entrydate ?>"><br><br>
        <input type="text" name="category_id" value="<?php echo $category_id ?>" hidden>
        <input type="submit" value="Update"  class='btn btn-success'>
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


