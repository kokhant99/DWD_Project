<?php
    include("confs/config.php");
    $id = $_REQUEST['id'];
    echo   $id;
    $sql = "DELETE FROM categories WHERE id=$id";
    mysqli_query($conn,$sql);
    header("location:cat-list.php");
?>