<?php
include "template.php"; ?>
<title>User Profile</title>

<h1 class='text-primary'>My Profile</h1>

<li class="nav-item">
    <a class="nav-link" href="logout.php">Logout</a>
</li>

<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["name"]);
unset($_SESSION["username"]);
unset($_SESSION["level"]);
header("Location:index.php");
?>


