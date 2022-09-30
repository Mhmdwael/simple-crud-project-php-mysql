<?php
session_start();
require_once("inc/db-connection.php");
require_once("inc/header.php");
$query = "SELECT * FROM `projects`";
$run_query = mysqli_query($conn, $query);
$projects = mysqli_fetch_all($run_query, MYSQLI_ASSOC);
?>
<?php if (!isset($_SESSION['email'])) {?>
    <a href="login.php" class="btn btn-success ms-2 mt-2">Login</a>
<?php } ?>

<?php if (isset($_SESSION['email'])) {?>
    <a href="addProject.php" class="btn btn-success ms-2 mt-2">Add project</a>
<?php } ?>

<?php if (isset($_SESSION['email'])) {?>
    <a href="logout.php" class="btn btn-danger mt-2 ms-2">Logout</a>
<?php } ?>

<div class="container mt-3 mb-2">
    <div class="row">
        <?php foreach ($projects as $project) { ?>
            <div class="curd col-lg-3 col-md-6">
                <img src="images/<?= $project['img'] ?>" alt="">
                <h4 class="mt-2"><?= $project['name'] ?> :</h4>
                <div class="curd_btn mt-3">
                    <a href="showproject.php?id=<?= $project['id'] ?>" class="btn btn-outline-primary">View-Detalis</a>
                    <?php if (isset($_SESSION['email'])) {?>
                        <a href="edit.php?id=<?=$project['id']?>" class="btn btn-outline-secondary">Edit</a>
                        <a href="delete.php?id=<?=$project['id']?>" class="btn btn-outline-danger">Delete</a>
                        <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>