<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spark Foundation</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

    <nav>
        <div class="nav-container">
            <div class="logo">
                APOD
            </div>

            <ul class="main-nav">
                <a href="index.php" class="no-border-link">
                    <li>Home</li>
                </a>
                <a href="dashboard.php?PageName=about" class="white sign-up border-link">
                    <li class="no-border">Dashboard</li>
                </a>

            </ul>

            <div class="bars">
                <a href="#"><i class="fas fa-bars"></i></a>
            </div>

        </div>
    </nav>

    <div class="mobile-nav">
        <ul class="side-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="dashboard.php?PageName=about">Dashboard</a></li>
        </ul>
        <div class="close">
            <a href="#"> <i class="fa fa-times" aria-hidden="true"></i></a>
        </div>

    </div>