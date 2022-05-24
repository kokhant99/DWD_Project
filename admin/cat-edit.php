<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Edit Category</h1>    
    <?php
            include("confs/config.php");
            $id = $_GET['id'];
            $result = mysqli_query($conn,"SELECT * FROM categories WHERE id=$id");
            $row = mysqli_fetch_assoc($result);
            
            header("location:cat-list.php");
    ?>

    <form action="cat-update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="name">Category Name</label>
        <input type="text" name="name" id="name" value="<?php echo $row['name'] ?>">
        <br><br>
        <input type="submit" value="Update Category">
    
    </form>



</body>
</html>