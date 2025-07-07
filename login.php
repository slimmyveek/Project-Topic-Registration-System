<?php
session_start();
include('includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>LIS Project Topic Registration System</title>
</head>

<body>
    <!--Navigation-->
    <nav class="navbar navbar-expand-md bg-success navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand"><b>L.I.S Project Topic Registration System</b></a>
        </div>
    </nav>

    <!-- Main content -->
    <main class="container">
        <h3 class="text-center">Log in</h3>
        <hr>

        <?php
        if (isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $query = "SELECT * FROM admin where username='$username' AND password='$password'";
            $result = mysqli_query($connect, $query);

            if (mysqli_fetch_array($result)) {
                header('Location: index.php');
            } else {
                echo "<div class='alert alert-danger' role='alert'> Incorrect username or password. </div>";
                // header('Location: login.php');
            }
        }
        ?>

        <form method="POST">
            <div class="p-5" style="width: 50%; margin-left: auto;
    margin-right: auto;">
                <div class="pb-3">
                    Username: <input type="text" class="form-control" value="" name="username" required id="">
                </div>

                <div>
                    Password: <input type="password" class="form-control" value="" name="password" required id="">
                </div>
            </div>

            <div class="mb-3 text-center">
                <button class="btn btn-success pt-3 pb-3" name="login">Login</button>
            </div>

        </form>
    </main>

    <?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>