<?php
require_once('inc/db-connection.php');
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    echo$id;
    $query="SELECT img FROM `projects` WHERE id=$id";
    $run_query=mysqli_query($conn,$query);
    $result=mysqli_fetch_assoc($run_query);
    // delete img from folder image 
    $imgName=$result['img'];
    unlink("images/$imgName");
    $query="DELETE FROM `projects` WHERE id=$id";
    $run_query=mysqli_query($conn,$query);
    header("location:index.php");
}
?>