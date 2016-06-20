<?php include("includes/db_connect.php"); ?>
<?php $selection = $_GET["type"]; ?>

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

<h1 class="center">Rhinebeck Masterpiece Drive-In</h1>

<?php
if ($selection == 1) {
    $query = "SELECT * FROM guestbook";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Database query failed.");
    } ?>
            <br />
            <h1 class="header">Guestbook Entries</h1>
            <br />
            <table>
                <tr>
                    <th>First</th>
                    <th>Last</th>
                    <th>Street</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>Email</th>
                </tr>
<?php        while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['lname'];?></td>
                 <td><?php echo $row['street'];?></td>
                 <td><?php echo $row['city'];?></td>
                 <td><?php echo $row['state'];?></td>
                 <td><?php echo $row['zip'];?></td>
                 <td><?php echo $row['email'];?></td>
                </tr>
 <?php } echo "</table>";}?>


<?php if ($selection == 2) {
    $query = "SELECT * FROM snackbar";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Database query failed.");
        } ?>
     <br />
     <h1 class="header">Snack Bar Drive-Up Sales</h1>
     <br />

              <table>
                  <tr>
                      <th>Date</th>
                      <th>Sales</th>
                  </tr>
                <?php
                $totsales = 0;
                $newdate = "2016-01-01";
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($newdate != $row['date']  && $row['id'] > 2) {
                        ?>
                        <tr>
                            <td><?php echo $newdate; ?></td>
                            <td><?php echo "$" . $totsales;?></td>
                        </tr>
                    <?php
                    $totsales = 0;
                    }
                            $totsales += $row['ham_cost'] + $row['cheese_cost'] + $row['hotdog_cost'] + $row['frenchfry_cost'] + $row['pretzel_cost'] +
                            $row['nuggets_cost'] + $row['pizza_cost'] + $row['lg_pop_cost'] + $row['med_pop_cost'] + $row['small_pop_cost'] + $row['candy_cost'] +
                            $row['fountain_cost'] + $row['bot_water_cost'] + $row['bot_soda_cost'];
                            $newdate = $row['date'];
                }

                }?>
                  <tr>
                      <td><?php echo $newdate; ?></td>
                      <td><?php echo "$" . $totsales;?></td>
                  </tr>
              </table>
     
  

                <?php if ($selection == 3) {
                    $query = "SELECT * FROM tickets";
                    $result = mysqli_query($connection, $query);
                    if (!$result) {
                        die("Database query failed.");
                    } ?>
                    <br />
                    <h1 class="header">Online Ticket Sales</h1>
                    <br />
                    <table>
                        <tr>
                            <th>Date</th>
                            <th>First</th>
                            <th>Last</th>
                            <th>Phone</th>
                            <th>Adult QTY</th>
                            <th>Adult $</th>
                            <th>Child QTY</th>
                            <th>Child $</th>
                            <th>Under5 QTY</th>
                            <th>Under5 $</th>
                            <th>Grand Total</th>
                        </tr>
                    <?php        while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['date'];?></td>
                            <td><?php echo $row['fname'];?></td>
                            <td><?php echo $row['lname'];?></td>
                            <td><?php echo $row['phone'];?></td>
                            <td><?php echo $row['adult_qty'];?></td>
                            <td><?php echo "$" . $row['adult_total'];?></td>
                            <td><?php echo $row['child_qty'];?></td>
                            <td><?php echo "$" . $row['child_total'];?></td>
                            <td><?php echo $row['under5_qty'];?></td>
                            <td><?php echo "$" . $row['under5_total'];?></td>
                            <td><?php echo "$" . $row['grand_total'];?></td>
                        </tr>
                    <?php } echo "</table>";}?>

                <a class="return" href="javascript:history.go(-1)">Back To Menu</a>
                <br /><br />


<?php include("includes/db_close.php"); ?>
</main>    

<?php include("includes/footer.php"); ?>

