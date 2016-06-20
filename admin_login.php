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

<main>
    <div class="center">
        <h1>Welcome to the <span id="new">NEW</span> Rhinebeck Masterpiece Drive-In</h1><br />
        <h1>Admin Login</h1><br />

        <form action="admin.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" value="" required/><br /><br />
            <label for="password">Password:</label>
            <input type="password" name="password" value="" required/><br />
            <br />
            <input type="submit" name="submit" value="submit" />
        </form>
    </div>

</main>

<?php include("includes/footer.php"); ?>