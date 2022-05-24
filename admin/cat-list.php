<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Category List</h1>    
    <?php
        include("confs/config.php");
        $result = mysqli_query($conn,"SELECT * FROM categories");

    ?>

    <ul class="list">
        <?php while($row=mysqli_fetch_assoc($result)) { ?>
        <li>
            [<a href="cat-del.php?id=<?php echo $row['id']?>" class="del" onclick="return confirm('Are you sure?')">del</a>]
            [<a href="cat-edit.php?id=<?php echo $row['id'] ?>" class="edit">edit</a>]
            <?php echo $row['name'];  ?>
        </li>
        <?php } ?>
    </ul>

    <a href="cat-new.php" class="new">New Category</a>
</body>
</html>