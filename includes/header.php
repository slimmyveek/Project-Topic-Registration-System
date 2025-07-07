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
            <a href="index.php" class="navbar-brand"><b>L.I.S Project Topic Registration System</b></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar toggler icon"></span>
            </button>

            <div class="collapse navbar-collapse" id=navmenu>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link page-scroll">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="registration.php" class="nav-link page-scroll">Registration</a>
                    </li>
                    <li class="nav-item">
                        <a href="verification.php" target="blank" class="nav-link">Verification</a>
                    </li>
                    <li class="nav-item">
                        <a href="reg_topics.php" target="blank" class="nav-link">Reg. Topics</a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link" onclick="return confirm('Are you sure you want to log out?')">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>