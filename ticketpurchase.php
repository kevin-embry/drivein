<?php include("includes/db_connect.php"); ?>

<?php
if (isset($_POST['submit'])) {
    $date = date('Y-m-d');
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $adult_qty = $_POST["adult_qty"];
    $adult_total = $_POST["adult_total"];
    $child_qty = $_POST["child_qty"];
    $child_total = $_POST["child_total"];
    $under5_qty = $_POST["under5_qty"];
    $under5_total = $_POST["under5_total"];
    $grand_total =  preg_replace("/([^0-9\\.])/i", "",$_POST["grand_total"]);

    $query = "INSERT INTO tickets (date, fname, lname, phone, adult_qty, adult_total, child_qty, child_total, under5_qty, under5_total, grand_total)
              VALUES ('{$date}', '{$fname}', '{$lname}', '{$phone}', {$adult_qty}, {$adult_total}, {$child_qty}, {$child_total}, {$under5_qty}, {$under5_total}, {$grand_total} )";

    $result = mysqli_query($connection, $query);
    if ($result) {
        //Success
    } else {
        die("Database insert failed. " . mysqli_error($connection));
    }
    echo '<script type="text/javascript">alert("Thank you for your ticket purchase. See you at the movies!")</script>';
}
?>



<?php include("includes/header.php"); ?>

<main>
    <div class="center">
        <h1>Welcome to the <span id="new">NEW</span> Rhinebeck Masterpiece Drive-In</h1>
        <h1>Purchase Tickets In Advance</h1>
        <img src="images/ticket.jpe" width="300px"/>
        <h2>Regular Admission</h2>
        <h2>Save time at the ticket booth</h2>
        <h2>Purchase your tickets here!</h2>
    </div>

    <form name="ticketpurchase" action="ticketpurchase.php" method="post">
        <table class="ticket">
            <tr>
                <th style="width: 300px;"></th>
                <th style="width: 100px;"></th>
                <th style="width: 80px;"><h2>Qty</h2></th>
                <th style="width: 50px;"><h2>Total</h2></th>
            </tr>

            <tr>
                <th class="ticketform"><h2>Adults</h2></th>
                <th class="ticketform"><h2>$10.00</h2></th>
                <th class="ticketform"><select name ="adult_qty" id="adult_qty" style="width: 50px;" onchange="total_adult()"/>
                    <option value="0" selected></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    </select></th>
                <th class="ticketform" ><input type="textbox" name="adult_total" id="adult_total" value="0"/></th>
            </tr>

            <tr>
                <th class="ticketform"><h2>Children 6-12</h2></th>
                <th class="ticketform" ><h2>$5.00</h2></th>
                <th class="ticketform"><select name="child_qty" id="child_qty" style="width: 50px;" onchange="total_child()">
                        <option value="0" selected></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select></th>
                <th class="ticketform" ><input type="textbox" name="child_total" id="child_total" value="0"/></th>
            </tr>

            <tr>
                <th class="ticketform"><h2>Children 5 and Under</h2></th>
                <th class="ticketform" ><h2>FREE</h2></th>
                <th class="ticketform"><select name="under5_qty" id="under5_qty" style="width: 50px;" onchange="total_under()">
                        <option value="0" selected></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select></th>
                <th class="ticketform"><input type="textbox" name="under5_total" id="under5_total" value="0"/></th>
            </tr>

            <tr>
                <th></th>  <!--ONE COMPLETE ROW BLANK-->
                <th></th>
                <th></th>
                <th></th>
            </tr>

            <tr>
                <th></th>
                <th></th>
                <th><h3>Total:</h3></th>
                <th class="ticketform" ><input type="textbox" name="grand_total" id="grand_total"/></th>
            </tr>
            
        </table>

        <h1 style="vertical-align: top" class="center">Your information:</h1>
        <table style="margin: auto; vertical-align: top;">
            <tr>
                <th class="ticketform"><label for="fname">First Name:</label></th>
                <th class="ticketform"><input type="text" id="fname" name="fname" cols="50" required/></th>
            </tr>

            <tr>
                <th class="ticketform"><label for="lname">Last Name:</label></th>
                <th class="ticketform"><input type="text" name="lname" cols="50" required/></th>
            </tr>

            <tr>
                <th class="ticketform"><label for="phone">Telephone #:</label></th>
                <th class="ticketform"><input type="text" name="phone" cols="50" required/></th>
            </tr>

            <tr>
                <th></th>  <!--ONE COMPLETE ROW BLANK-->
                <th></th>

            </tr>

            <tr>
                <th></th>
                <th style="float: left;"><input type="submit" name="submit" value="submit"/></th>
            </tr>

        </table>

    </form>



</main>

<script>
    function total_adult()
    {
        var quantity;
        var price = 10.00;
        var total;

        quantity = document.getElementById("adult_qty").value;
        total = price * quantity;
        document.getElementById("adult_total").value = total;
        total_price();
    }

    function total_child()
    {
        var quantity;
        var price = 5;
        var total;
        quantity = document.getElementById("child_qty").value;
        total = price * quantity;
        document.getElementById("child_total").value = total;
        total_price();
    }

    function total_under()
    {
        var quantity;
        var price = 0;
        var total;
        quantity = document.getElementById("under5_qty").value;
        total = price * quantity;
        document.getElementById("under5_total").value = total;
        total_price();
    }


    function total_price()
    {
        var total;
        var adult_total;
        var child_total;


        adult_total = document.getElementById("adult_total").value;
        child_total = document.getElementById("child_total").value;


        total = +adult_total + +child_total;
        //total += child_total;
        document.getElementById("grand_total").value = ("$" + total);
    }

   
</script>
<?php include("includes/db_close.php"); ?>
<?php include("includes/footer.php"); ?>
