<?php include("includes/db_connect.php"); ?>
<?php

if (isset($_POST['submit'])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $street = $_POST["street"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $email = mysqli_real_escape_string($connection, $_POST["email"]);

    $query = "INSERT INTO guestbook (fname, lname, street, city, state, zip, email)
           VALUES ('{$fname}', '{$lname}', '{$street}', '{$city}', '{$state}', '{$zip}', '{$email}')";

    $result = mysqli_query($connection, $query);
     if ($result) {
        //Success
         echo "<script type= 'text/javascript'>alert('Thank you for filling out our guestbook!');</script>";
    } else {
        die("Database insert failed. " . mysqli_error($connection));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guestbook</title>
    <link rel="stylesheet" href="stylesheets/guestbook.css"/>
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
    <div class="top">
        <h1 class="whitetext">Welcome to the <span id="new">NEW</span> Rhinebeck Masterpiece Drive-In</h1><br/>
        <h1 class ="whitetext">Sign Our Guestbook</h1>
     </div>

    <div class="mid">
    <form id="guestbook" action="guestbookform.php" method="post">

        <table>
            <tr>
                <td></td>
                <td style="text-align: left"><span style="color: red;">* Required Fields</span></td>
                <td></td>

            </tr>
            <tr>
                <td><label for="fname">First Name:</label></td>
                <td><input type="text" id="fname" name="fname" required /></td>
                <td><span style="color: red">*</span><br/></td>
            </tr>
            <tr>
                <td><label for="lname">Last Name:</label></td>
                <td><input type="text" id="lname" name="lname" required /></td>
                <td><span style="color: red">*</span><br/></td>
            </tr>
            <tr>
                <td><label for="street">Street Address:</label></td>
                <td><input type="text" id="street" name="street" /><br/></td>
            </tr>
            <tr>
                <td><label for="city">City:</label></td>
                <td><input type="text" id="city" name="city"/><br/></td>
            </tr>
            <tr>
                <td><label for="state">State:</label></td>
                <td style="text-align: left"><select id="state" name="state">
                    <option value="AL">AL</option>
                    <option value="AK">AK</option>
                    <option value="AZ">AZ</option>
                    <option value="AR">AR</option>
                    <option value="CA">CA</option>
                    <option value="CO">CO</option>
                    <option value="CT">CT</option>
                    <option value="DE">DE</option>
                    <option value="FL">FL</option>
                    <option value="GA">AGA</option>
                    <option value="HI">HI</option>
                    <option value="ID">ID</option>
                    <option value="IL">IL</option>
                    <option value="IN">IN</option>
                    <option value="IA">IA</option>
                    <option value="KS">KS</option>
                    <option value="KY">KY</option>
                    <option value="LA">LA</option>
                    <option value="ME">ME</option>
                    <option value="MD">MD</option>
                    <option value="MA">MA</option>
                    <option value="MI">MI</option>
                    <option value="MN">MN</option>
                    <option value="MS">MS</option>
                    <option value="MO">MO</option>
                    <option value="MT">MT</option>
                    <option value="NE">NE</option>
                    <option value="NV">NV</option>
                    <option value="NH">NH</option>
                    <option value="NJ">NJ</option>
                    <option value="NM">NM</option>
                    <option value="NY">NY</option>
                    <option value="NC">NC</option>
                    <option value="ND">ND</option>
                    <option value="OH">OH</option>
                    <option value="OK">OK</option>
                    <option value="OR">OR</option>
                    <option value="PA">PA</option>
                    <option value="RI">RI</option>
                    <option value="SC">SC</option>
                    <option value="SD">SD</option>
                    <option value="TN">TN</option>
                    <option value="TX">TX</option>
                    <option value="UT">UT</option>
                    <option value="VT">VT</option>
                    <option value="VA">VA</option>
                    <option value="WA">WA</option>
                    <option value="WV">WV</option>
                    <option value="WI">WI</option>
                    <option value="WY">WY</option>
                </select><br/></td>
            </tr>
            <tr>
                <td><label for="zip">Zip Code:</label></td>
                <td><input type="text" id="zip" name="zip" pattern="\d{5}([\-]\d{4})?" title="Must be 99999 or 99999-9999"/><br/></td>
            </tr>
            <tr>
                <td><label for="email">Email Address:</label></td>
                <td><input type="email" name="email" id="email" required /></td>
                <td><span style="color: red">*</span><br/></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
        <input style="margin-top: 10px;" type="submit" name="submit" value="Submit" />
        <input type="button" name="clear" value="Clear Fields" onclick="clearfileds()"/>

    </form>
    </div>

    <div class="bot">
        <h2>Thank you for taking the time to fill in our guestbook. We like to stay in touch with all of our loyal patrons.
From time to time we like to send coupons and specials to our customers as well. For filling this out you will receive in your
        email a coupon for 50% off of your next visit. </h2>
    </div>


</main>

<footer id="foot">
    <div id="container">
        <img id="antipiracy" src="images/anti-piracy.gif" width="125px"/>
        <a href="http://www.mpaa.org/why-copyright-matters/" target="_blank">Video recording devices are strictly prohibited. Click here for anti-piracy laws.</a>
    </div>
    <div id="address">
        <p class="whitetext">Rhinebeck Masterpiece Drive-In</p>
        <p class="whitetext">3392 North Albany Post Road</p>
        <p class="whitetext">Rhinebeck, NY 12572</p>
    </div>
</footer>

</body>
</html>
<?php include("includes/db_close.php"); ?> 

