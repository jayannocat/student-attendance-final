<?php
ob_start();
session_start();
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance</title>
    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
<div class="container-fluid vh-100 px-md-5">

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#"><b style="color: lightgreen;">STUDENT ATTENDANCE </b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-link me-3">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-link me-3">
                            <a class="nav-link active" aria-current="page" href="about.php">About</a>
                        </li>
                        <li class="nav-link me-3">
                            <a class="nav-link active" aria-current="page" href="add.php">Add</a>
                        </li>
                    
                        <?php
                    if (isset($_SESSION['logged_in'])) { ?>
                    <span class="navbar-text px-lg-3">
                        <a class="text-success text-decoration-none nav-link me-3" href="process.php?logout">Logout</a>
                    </span>
                    <?php } else { ?>
                        <span class="navbar-text px-lg-3">
                            <a type="button" class="text-decoration-none text-success nav-link me-3" aria-current="page" href="login.php">Login</a>
                        </span>
                    <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
