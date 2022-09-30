<?php
session_start();
require_once("inc/db-connection.php");
if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $Password=$_POST['password'];
    $query="SELECT * FROM `users` where email='$email'";
    $run_query=mysqli_query($conn,$query);
    if (mysqli_num_rows($run_query)>0) {
        $user = mysqli_fetch_assoc($run_query);
        $iscorrect=password_verify($Password,$user['password']);
        if ($iscorrect) {
            $_SESSION['email']=$email;
            header("location:index.php");
        } else {
            $_SESSION['errors']="Password Is Not Correct";
            print_r($_SESSION['errors']);
        header("location:login.php");
        }
        
    }
    else{
        $_SESSION['errors']="Email Is Not Found";
        print_r($_SESSION['errors']);
        header("location:login.php");
    }
}else{
    header('location:login.php');
}
?>