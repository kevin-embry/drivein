<?php function redirect($new_location) {
    header("LOCATION: " . $new_location);
    exit;
}
?>
<?php
$username = $_POST["username"];
$password = $_POST["password"];
if ($username != "admin" || $password != "password") {
    redirect("admin_login.php");} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rhinebeck Masterpiece Drive-In Theater</title>
    <link rel="stylesheet" href="stylesheets/admin_styles.css">
</head>
<body>
<header>
    <img src="images/headerImage2.jpg" alt="header" width="1000px" height="200px"/>
</header>

<nav class="menu">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="nowplaying.php">Now Playing</a></li>
        <li><a href="comingsoon.php">Coming Soon</a></li>
        <li><a href="ticketpurchase.php">Get Tickets</a></li>
        <li><a href="snackbar.php">Snack Shop</a></li>
        <li><a href="photos.php">Photos</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="admin_login.php">Admin</a></li>
    </ul>
</nav>

<main style="height: 100%;">
    <div class="center">
        <h1>Welcome to the <span id="new">NEW</span> Rhinebeck Masterpiece Drive-In</h1>
        <h1>Admin Menu</h1><br />
    </div>   
    <nav class="admin">
        <ul style="margin-left: 365px;">
            <li><a href="displaydata.php?type=1">Display Guest Book</a></li>
            <li><a href="displaydata.php?type=2">Display Snack Bar Sales</a></li>
            <li><a href="displaydata.php?type=3">Display Ticket Sales</a></li>
        </ul>
    </nav>    
 
</main>
<?php include("includes/footer.php"); ?>
