
<?php require_once 'config.php'; ?>

<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php"><img src="Photos/CartsForDays.png" alt="CartsForDays"
                                                  style="width: 80px; height: 80px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse bg-light" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"> <!-- Index button -->
                <a class="nav-link" href="index.php">Home</span></a>
            </li>
            <li class="nav-item"> <!-- Index button -->
                <a class="nav-link" href="contact.php">Contact Us!</span></a>
            </li>
            <li class="nav-item"> <!-- Index button -->
                <a class="nav-link" href="profile.php">Profile</span></a>
            </li>
            <li class="nav-item"> <!-- Index button -->
                <a class="nav-link" href="logout.php">Log Out</span></a>
            </li>
        </ul>
    </div>
</nav>

<script src="js/bootstrap.bundle.js"></script>
<?php

function sanitise_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function outputFooter()
{
    date_default_timezone_set('Australia/Canberra');
    echo "<footer>This page was last modified: " . date("F d Y H:i:s.", filemtime("index.php")) . "</footer>";
}

if ($_SESSION["level"] "Administrator") : ?>
<li class="nav-item">
    <a class="nav-link" href="search-user.php">Search Users</span></a>
</li>
<?php endif; ?>
<?php endif; ?>

?>