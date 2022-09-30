<?php
require_once("inc/db-connection.php");
require_once("inc/header.php");
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $query="SELECT * FROM `projects` WHERE id=$id";
    $run_query=mysqli_query($conn,$query);
    $project=mysqli_fetch_assoc($run_query);
}
?>
<a href="index.php" class="btn btn-outline-secondary mt-2 ms-2">Back to home page</a>
<div class="container py-5">
    <form action="handle-edit.php?id=<?=$project['id']?>" method="post" enctype="multipart/form-data">
        <label class="mt-2">Name* :</label>
        <input class="form-control" name="name" value="<?=$project['name']?>" type="text" placeholder="Enter project Name">

        <label class="mt-2">Description* :</label>
        <textarea class="form-control" name="desc" id="" placeholder="Please Enter Description">
            <?= $project['description'] ?>
        </textarea>

        <label class="mt-2">Img *: <img width="20" src="images/<?=$project['img']?>"> </label>
        <input value="" type="file" name="file" class="form-control">

        <label class="mt-2">Website-URL :</label>
        <input class="form-control" name="url" value="<?=$project['url']?>" type="text" placeholder="Enter webtsite url">

        <label class="mt-2">Repo-URL :</label>
        <input class="form-control" name="repo" value="<?=$project['repo']?>" type="text" placeholder="Enter github url">

        <button class="btn btn-success mt-4" type="submit" name="submit">Edit</button>
    </form>

</div>
<?php require_once("inc/footer.php") ?>