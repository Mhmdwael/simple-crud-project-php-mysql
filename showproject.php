<?php
require_once("inc/db-connection.php");
require_once("inc/header.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
elseif(!isset($_GET['id'])){
    header("location:index.php");
}
$query = "SELECT `id`, `name`, `description`, `img`, `url`, `repo`, `created_at` FROM `projects` WHERE id=$id";
$run_query = mysqli_query($conn, $query);
$project = mysqli_fetch_assoc($run_query);
?>
<a href="index.php" class="btn btn-outline-secondary mt-2 ms-2">Back to home page</a>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 m-auto text-light">
            <img class="img-fluid" src="images/<?=$project['img']?>">
            <h3 class="mt-2"><?= $project['name']?> :</h3>
            <p class="fs-5"><?= $project['description']?></p>
            <a href="https://github.com/Mhmdwael" target="_blank" class="btn btn-outline-light">Click to go to my GitHup => <?=$project['repo']?></a>
            <a href="https://www.facebook.com/muhamed.wael.505" target="_blank" class="btn btn-outline-light mt-2 ">Click to go to facebook => <?=$project['url']?></a>
        </div>
    </div>
</div>