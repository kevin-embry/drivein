<?php include("includes/db_connect.php"); ?>

<?php
    if (isset($_POST['submit'])) {
        $date = date('Y-m-d');
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $plate = $_POST["plate"];
        $spotnumber = $_POST["spotnumber"];
        $ham_qty = $_POST["ham_qty"];
        $ham_cost = $ham_qty * 6.00;
        $cheese_qty = $_POST["cheese_qty"];
        $cheese_cost = $cheese_qty * 6.50;
        $hotdog_qty = $_POST["hotdog_qty"];
        $hotdog_cost = $hotdog_qty * 4.00;
        $frenchfry_qty = $_POST["frenchfry_qty"];
        $frenchfry_cost = $frenchfry_qty * 3.00;
        $pretzel_qty = $_POST["pretzel_qty"];
        $pretzel_cost = $pretzel_qty * 3.00;
        $nuggets_qty = $_POST["nuggets_qty"];
        $nuggets_cost = $nuggets_qty * 4.00;
        $pizza_qty = $_POST["pizza_qty"];
        $pizza_cost = $pizza_qty * 3.50;
        $lg_popcorn_qty = $_POST["lg_popcorn_qty"];
        $lg_pop_cost = $lg_popcorn_qty * 6.00;
        $med_popcorn_qty = $_POST["med_popcorn_qty"];
        $med_pop_cost = $med_popcorn_qty * 5.00;
        $small_popcorn_qty = $_POST["small_popcorn_qty"];
        $small_pop_cost = $small_popcorn_qty * 4.00;
        $candy_qty = $_POST["candy_qty"];
        $candy_cost = $candy_qty * 2.00;
        $fountain_qty = $_POST["fountain_qty"];
        $fountain_cost = $fountain_qty * 2.50;
        $bot_water_qty = $_POST["bot_water_qty"];
        $bot_water_cost = $bot_water_qty * 3.00;
        $bot_soda_qty = $_POST["bot_soda_qty"];
        $bot_soda_cost = $bot_soda_qty * 3.00;



    $query = "INSERT INTO snackbar (date, name, phone, plate, spotnumber, ham_qty, ham_cost, cheese_qty, cheese_cost, hotdog_qty, hotdog_cost, frenchfry_qty, frenchfry_cost, pretzel_qty, 
              pretzel_cost, nuggets_qty, nuggets_cost, pizza_qty, pizza_cost, lg_popcorn_qty, lg_pop_cost, med_popcorn_qty, med_pop_cost, small_popcorn_qty, small_pop_cost, candy_qty, 
              candy_cost, fountain_qty, fountain_cost, bot_water_qty, bot_water_cost, bot_soda_qty, bot_soda_cost)
              VALUES ('{$date}', '{$name}', '{$phone}', '{$plate}', {$spotnumber}, {$ham_qty}, {$ham_cost}, {$cheese_qty}, {$cheese_cost}, {$hotdog_qty}, {$hotdog_cost}, {$frenchfry_qty}, 
              {$frenchfry_cost}, {$pretzel_qty}, {$pretzel_cost}, {$nuggets_qty}, {$nuggets_cost}, {$pizza_qty}, {$pizza_cost}, {$lg_popcorn_qty}, {$lg_pop_cost}, {$med_popcorn_qty}, {$med_pop_cost}, 
              {$small_popcorn_qty}, {$small_pop_cost}, {$candy_qty}, {$candy_cost}, {$fountain_qty}, {$fountain_cost}, {$bot_water_qty}, {$bot_water_cost}, {$bot_soda_qty}, {$bot_soda_cost})";

    $result = mysqli_query($connection, $query);
    if ($result) {
    //Success
    
    } else {
    die("Database insert failed. " . mysqli_error($connection));
    }
        echo '<script type="text/javascript">alert("Thank you for your order. It will be delivered shortly.")</script>';
    }
    ?>
<?php include("includes/header.php"); ?>

<main>
    <div class="center">
        <h1>Welcome to the <span id="new">NEW</span> Rhinebeck Masterpiece Drive-In</h1>
        <h1>Snack Bar Food & Merchandise</h1>
        <img src="images/vintagesign.jpg" width="300px"/>
    </div>
    <form id="menuboard" action="snackbar.php" method="post">
        <h2 class="center">Any snack menu can be delivered to your car!</h2>
        <h2 class="center">Simply fill out the form at the bottom.</h2>

        <div id="menuleft">
            <h1 style="text-align: center; color: black;">FOOD</h1>
            <table style="margin: auto;">
                <tr>
                    <th></th>
                    <th class="holder"></th>
                    <th><h2 class="black">PRICE</h2></th>
                    <th><h2 class="black" >QTY</h2></th>
                </tr>
                <tr>
                    <th><h2 class="black">Hamburger</h2></th>
                    <th class="holder"></th>
                    <th><h2 class="black">$6.00</h2></th>
                    <th><select id="ham_qty" name="ham_qty" style="width: 40px;">
                            <option value="0" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></th>
                </tr>

                <tr>
                    <th><h2 class="black">Cheeseburger</h2></th>
                    <th class="holder"></th>
                    <th><h2 class="black" >$6.50</h2></th>
                    <th><select id="cheese_qty" name="cheese_qty" style="width: 40px;">
                            <option value="0" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></th>
                </tr>

                <tr>
                    <th><h2 class="black">Hot Dog</h2></th>
                    <th class="holder"></th>
                    <th><h2 class="black">$4.00</h2></th>
                    <th><select id="hotdog_qty" name="hotdog_qty" style="width: 40px;">
                            <option value="0" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></th>
                </tr>

                <tr>
                    <th><h2 class="black">French Fries</h2></th>
                    <th class="holder"></th>
                    <th><h2 class="black">$3.00</h2></th>
                    <th><select id="frenchfry_qty" name="frenchfry_qty" style="width: 40px;">
                            <option value="0" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></th>
                </tr>

                <tr>
                    <th><h2 class="black" >Pretzel</h2></th>
                    <th class="holder"></th>
                    <th><h2 class="black">$3.00</h2></th>
                    <th><select id="pretzel_qty" name="pretzel_qty" style="width: 40px;">
                            <option value="0" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></th>
                </tr>

                <tr>
                    <th><h2 class="black">6pc Chicken Nuggets</h2></th>
                    <th class="holder"></th>
                    <th><h2 class="black">$4.00</h2></th>
                    <th><select id="nuggets_qty" name="nuggets_qty" style="width: 40px;">
                            <option value="0" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></th>
                </tr>

                <tr>
                    <th><h2 class="black">Pizza Slice</h2></th>
                    <th class="holder"></th>
                    <th><h2 class="black">$3.50</h2></th>
                    <th><select id="pizza_qty" name="pizza_qty" style="width: 40px;">
                            <option value="0" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></th>
                </tr>
            </table>

        </div>

        <div id="menuright">
            <h1 style="text-align: center; color: black;">DRINKS & POPCORN</h1>
            <table style="margin: auto;">
                <tr>
                    <th></th>
                    <th class="holder"></th>
                    <th><h2 class="black">PRICE</h2></th>
                    <th><h2 class="black">QTY</h2></th>
                </tr>
                <tr>
                    <th><h2 class="black">Popcorn Large</h2></th>
                    <th class="holder"></th>
                    <th><h2 class="black">$6.00</h2></th>
                    <th><select id="lg_popcorn_qty" name="lg_popcorn_qty" style="width: 40px;">
                            <option value="0" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></th>
                </tr>

                <tr>
                    <th><h2 class="black">Popcorn Med</h2></th>
                    <th class="holder"></th>
                    <th><h2 class="black">$5.00</h2></th>
                    <th><select id="med_popcorn_qty" name="med_popcorn_qty" style="width: 40px;">
                            <option value="0" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></th>
                </tr>

                <tr>
                    <th><h2 class="black">Popcorn Small</h2></th>
                    <th class="holder"></th>
                    <th><h2 class="black">$4.00</h2></th>
                    <th><select id="small_popcorn_qty" name="small_popcorn_qty" style="width: 40px;">
                            <option value="0" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></th>
                </tr>

                <tr>
                    <th><h2 class="black">Candy Bar</h2></th>
                    <th class="holder"></th>
                    <th><h2 class="black">$2.00</h2></th>
                    <th><select id="candy_qty" name="candy_qty" style="width: 40px;">
                            <option value="0" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></th>
                </tr>

                <tr>
                    <th><h2 class="black">Fountain Soda</h2></th>
                    <th class="holder"></th>
                    <th><h2 class="black">$2.50</h2></th>
                    <th><select id="fountain_qty" name="fountain_qty" style="width: 40px;">
                            <option value="0" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></th>
                </tr>

                <tr>
                    <th><h2 class="black">Bottled Water</h2></th>
                    <th class="holder"></th>
                    <th><h2 class="black">$3.00</h2></th>
                    <th><select id="bot_water_qty" name="bot_water_qty" style="width: 40px;">
                            <option value="0" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></th>
                </tr>

                <tr>
                    <th><h2 class="black">Bottled Soda</h2></th>
                    <th class="holder" ></th>
                    <th><h2 class="black">$3.00</h2></th>
                    <th><select id="bot_soda_qty" name="bot_soda_qty" style="width: 40px;">
                            <option value="0" selected></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select></th>
                </tr>
            </table>
        </div>
        <h1 class="center">Your information:</h1>
        <table style="margin: auto; vertical-align: top;">
            <tr>
                <td><label for="name">Name:</label></td>
                <td><input type="text" id="name" name="name" cols="50" required/></td>
            </tr>

            <tr>
                <td><label for="phone">Telephone #:</label></td>
                <td><input type="text" id="phone" name="phone" cols="50" required/></td>
            </tr>

            <tr>
                <td><label for="plate">License Plate#:</label></td>
                <td><input type="text" id="plate" name="plate" cols="50" required/></td>
            </tr>

            <tr>
                <td><label for="spotnumber">Parking Spot#:</label></td>
                <td><input type="text" id="spotnumber" name="spotnumber" cols="50" required/></td>
            </tr>

            <tr>
                <td></td>
                <td style="float: left;"><input type="submit" name="submit" value="submit" onclick="alert()"/></td>
            </tr>

        </table>

    </form>




</main>
<script>
    function alert() {
        window.alert("Thank you for your purchase. It will be delivered to your car shortly.");
    }


</script>



<?php include("includes/db_close.php"); ?>
<?php include("includes/footer.php"); ?>