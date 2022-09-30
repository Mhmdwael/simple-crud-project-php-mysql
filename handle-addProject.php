<?php 
session_start();
require_once("inc/db-connection.php");

if (isset($_POST['submit'])) {
    $name=htmlspecialchars(trim($_POST['name']));
    $desc=htmlspecialchars(trim($_POST['desc']));
    $file=$_FILES['file'];
    $url=htmlspecialchars(trim($_POST['url']));
    $repo=htmlspecialchars(trim($_POST['repo']));
    
    $fileName=$file['name'];
    $fileTempName=$file['tmp_name'];
    $fileError=$file['error'];

    //EXTENSION
    $ext=pathinfo($fileName,PATHINFO_EXTENSION);
    $fileNewName=uniqid().".".$ext;

    // validation
    $errors=[];
    //name
    if (empty($name)) {
        $errors='Name is required';
    }
    elseif(strlen($name)<5 || strlen($name)>255){
        $errors='Length Character Must be[5-255]';
    }
    elseif(!is_string($name) || is_numeric($name)){
        $errors='Name Must Be String';
    }

    //desc
    if (empty($desc)) {
        $errors='description is required';
    }
    elseif(strlen($desc)<5 || strlen($desc)>1000){
        $errors='Length Character Must be[5-1000]';
    }

    //img
    if ($fileError>0) {
        $errors='There is an Error while Uploading image';
    }

    //url
    if (!filter_var($url,FILTER_VALIDATE_URL)) {
        $errors='Webtsite Url Must Be Valid Url';
    }

    //repo
    if (!filter_var($repo,FILTER_VALIDATE_URL)) {
        $errors='Webtsite Repo Must Be Valid Url';
    }

    if (empty($errors)) {
        $query="INSERT INTO `projects`(`name`, `description`, `img`, `url`, `repo`)VALUES ('$name','$desc','$fileNewName','$url','$repo')";
        $run_query=mysqli_query($conn,$query);
        move_uploaded_file($fileTempName,"images/$fileNewName");
        header("location:index.php");
    }
    else{
        $_SESSION['errors']=$errors;
        header("location:addProject.php");
    }
}
?>