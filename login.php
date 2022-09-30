<?php
session_start();
if (isset($_SESSION['email'])) {
    header("location:index.php");
}

if (isset($_SESSION['errors'])) {
    print_r($_SESSION['errors']);
}

unset($_SESSION['errors']);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
    body {
        background-color: #000;
        color: #fff;
    }
</style>
<div class="container">
    <div class="login-form mt-5">
        <h2 class="text-center my-5">Login</h2>
        <form action="handle-login.php" method="post">
            <div class="col-md-6 m-auto p-3 border rounded  ">
                <div class="form-group">
                    <label for="email" class="mb-1">
                        <h5>Email</h5>
                    </label>
                    <input type="text" name="email" id="email" class="form-control" required="required">
                </div>
                <div class="form-group">
                    <label for="email" class="mb-1 mt-3">
                        <h5>Password</h5>
                    </label>
                    <input name="password" type="password" id="Password" class="form-control" required="required">
                </div>
                <div class="form-group d-grid gap-2">
                    <button type="submit" name="submit" class="btn btn-success btn-block mt-3">Submit</button>
                </div>
            </div>
        </form>
    </div>