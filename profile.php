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

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 text-success"><h2>From</h2></div>
        <div class="col-md-4 text-success"><h2>Message</h2></div>
        <div class="col-md-4 text-success"><h2>Date Sent</h2></div>
    </div>

    <?php
$numberOfRowsReturned = $conn->querySingle("SELECT count(*) FROM messaging WHERE recipient='$user_id'");

if ($numberOfRowsReturned > 0) {
$messages = $conn->query("SELECT * FROM messaging WHERE recipient='$user_id'");
?>

    <?php
    while($individual_message = $messages->fetchArray()) {
    $sender = $individual_message[1];
    $message = $individual_message[3];
    $dateSubmitted = $individual_message[4];
    ?>
    <divclass="row">
    <divclass="col-md-4"><?php echo$sender;?></div>
<divclass="col-md-4"><?php echo$message;?></div>
<divclass="col-md-4"><?php echo$dateSubmitted;?></div>
    </div>

<?php
}

}
?>
