<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link rel="stylesheet" href="./static/innermenu.css">
</head>
<body>

    <div class="maindiv">
        <nav class="nav-bar">
            <form action="./menu.php"><button class="left-arrow-button"><img src="./static/left-arrow.png" class="leftarrow"></button></form>
            <h2 class="ordertitle">ORDER</h2>
            <div class="tableno">
            <form action="./menu.php" method="post">
                <?php
                session_start();

                if(isset($_SESSION['selected_table'])){
                    $selectedTable = $_SESSION['selected_table'];
                    echo "<h2>$selectedTable</h2>";
                } else {
                    echo "<p>No table selected.</p>";
                }
                ?>
            </form>
            </div>
        </nav>
    
        <?php 
            if(isset($_POST['starter'])){ ?>
                    <h2 class="stateh2">Starter Menu</h2>
                <div class="starter">
                    <div class="flex">
                        <div class="statermenu">
                            <div class="imagegaping"><img src="./static/starter/manchaow-soup.jpeg" class="panner"></div>
                            <h4 class="dishname" name="manchaow">Manchaow Soup</h4>
                            <h4 class="pannerrate">₹120</h4>
                            <div class="incdec">
                                <button onclick="decrement(1)" class="decrementButton">-</button>
                                <span id="value1" class="display" name="span1">0</span>
                                <button onclick="increment(1)" class="incrementButton">+</button>
                            </div>
                        </div>

                        <div class="statermenu">
                            <img src="./static/starter/tomato-soup.jpeg" class="panner">
                            <h4 class="dishname" name="tomato" >Tomato Soup </h4>
                            <h4 class="pannerrate">₹110</h4>
                            <div class="incdec">
                                <button onclick="decrement(2)" class="decrementButton">-</button>
                                <span id="value2" class="display" name="span2">0</span>
                                <button onclick="increment(2)" class="incrementButton">+</button>
                            </div>
                        </div>

                    </div>
                    <div class="flex">
                        <div class="statermenu">
                            <img src="./static/starter/noodles.jpg" class="panner">
                            <h4 class="dishname" name="noodles" >Noodles</h4>
                            <h4 class="pannerrate">₹200</h4>
                            <div class="incdec">
                                <button onclick="decrement(3)" class="decrementButton">-</button>
                                <span id="value3" class="display" name="span3">0</span>
                                <button onclick="increment(3)" class="incrementButton">+</button>
                            </div>
                        </div>

                        <div class="statermenu">
                            <img src="./static/starter/veg-manchurian.jpg" class="panner">
                            <h4 class="dishname" name="manchurian" >Veg Manchurian</h4>
                            <h4 class="pannerrate">₹220</h4>
                            <div class="incdec">
                                <button onclick="decrement(4)" class="decrementButton">-</button>
                                <span id="value4" class="display" name="span4">0</span>
                                <button onclick="increment(4)" class="incrementButton">+</button>
                            </div>
                        </div>

                    </div>
                    <div class="flex">
                        <div class="statermenu">
                            <img src="./static/starter/panner-chapp.jpg" class="panner">
                            <h4 class="dishname" name="pannerchapp" >Panner Chapp </h4>
                            <h4 class="pannerrate">₹150</h4>
                            <div class="incdec">
                                <button onclick="decrement(5)" class="decrementButton">-</button>
                                <span id="value5" class="display" name="span5">0</span>
                                <button onclick="increment(5)" class="incrementButton">+</button>
                            </div>
                        </div>

                        <div class="statermenu">
                            <img src="./static/starter/kabab.jpeg" class="panner">
                            <h4 class="dishname" name="kabab" >Kabab</h4>
                            <h4 class="pannerrate">₹220</h4>
                            <div class="incdec">
                                <button onclick="decrement(6)" class="decrementButton">-</button>
                                <span id="value6" class="display" name="span6">0</span>
                                <button onclick="increment(6)" class="incrementButton">+</button>
                            </div>
                        </div>

                    </div>
                    <form id="orderForm" action="datainsert.php" method="post">
                        <?php
                            // Loop through each dish and its quantity
                            for ($i = 1; $i <= count($_POST) / 2; $i++) {
                                $dish = $_POST["dish$i"];
                                $quantity = $_POST["quantity$i"];
                                // Create hidden input fields for each dish and quantity
                                echo "<input type='hidden' name='dish$i' value='$dish'>";
                                echo "<input type='hidden' name='quantity$i' value='$quantity'>";
                            }
                            ?>
                    </form> 
                        <button onclick="prepareFormDataAndSubmit()" type="submit" name="datainsert" value="Place Order" class="buttencss" >Place Order</button>
                </div>
            <?php }?>
            <!-- Desertes starts from here -->
            <?php 
                if(isset($_POST['icecream'])){ ?>
                    <h2 class="stateh2">Dessert Menu</h2>
                    <div class="starter">
                        <div class="flex">
                            <div class="statermenu">
                                <div class="imagegaping"><img src="./static/desert/cake1.png" class="panner"></div>
                                <h4 class="dishname">Cake</h4>
                                <h4 class="pannerrate">₹250</h4>
                                <div class="incdec">
                                    <button onclick="decrement(1)" class="decrementButton">-</button>
                                    <span id="value1" class="display">0</span>
                                    <button onclick="increment(1)" class="incrementButton">+</button>
                                </div>
                            </div>

                            <div class="statermenu">
                                <img src="./static/desert/sundae_Icecream.jpg" class="panner">
                                <h4 class="dishname">Ice Cream</h4>
                                <h4 class="pannerrate">₹270</h4>
                                <div class="incdec">
                                    <button onclick="decrement(2)" class="decrementButton">-</button>
                                    <span id="value2" class="display">0</span>
                                    <button onclick="increment(2)" class="incrementButton">+</button>
                                </div>
                            </div>

                        </div>
                        <div class="flex">
                            <div class="statermenu">
                                <img src="./static/desert/kulfi.jpg" class="panner">
                                <h4 class="dishname">Kulfi</h4>
                                <h4 class="pannerrate">₹280</h4>
                                <div class="incdec">
                                    <button onclick="decrement(3)" class="decrementButton">-</button>
                                    <span id="value3" class="display">0</span>
                                    <button onclick="increment(3)" class="incrementButton">+</button>
                                </div>
                            </div>

                            <div class="statermenu">
                                <img src="./static/desert/rabdi.jpg" class="panner">
                                <h4 class="dishname">Rabdi</h4>
                                <h4 class="pannerrate">₹230</h4>
                                <div class="incdec">
                                    <button onclick="decrement(4)" class="decrementButton">-</button>
                                    <span id="value4" class="display">0</span>
                                    <button onclick="increment(4)" class="incrementButton">+</button>
                                </div>
                            </div>

                        </div>
                        <div class="flex">
                            <div class="statermenu">
                                <img src="./static/desert/jalebi.png" class="panner">
                                <h4 class="dishname">Jalebi</h4>
                                <h4 class="pannerrate">₹220</h4>
                                <div class="incdec">
                                    <button onclick="decrement(5)" class="decrementButton">-</button>
                                    <span id="value5" class="display">0</span>
                                    <button onclick="increment(5)" class="incrementButton">+</button>
                                </div>
                            </div>

                            <div class="statermenu">
                                <img src="./static/desert/browni.jpg" class="panner">
                                <h4 class="dishname">Browni</h4>
                                <h4 class="pannerrate">₹310</h4>
                                <div class="incdec">
                                    <button onclick="decrement(6)" class="decrementButton">-</button>
                                    <span id="value6" class="display">0</span>
                                    <button onclick="increment(6)" class="incrementButton">+</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <form id="orderForm" action="datainsert.php" method="post">
                        <?php
                            // Loop through each dish and its quantity
                            for ($i = 1; $i <= count($_POST) / 2; $i++) {
                                $dish = $_POST["dish$i"];
                                $quantity = $_POST["quantity$i"];
                                // Create hidden input fields for each dish and quantity
                                echo "<input type='hidden' name='dish$i' value='$dish'>";
                                echo "<input type='hidden' name='quantity$i' value='$quantity'>";
                            }
                            ?>
                    </form> 
                        <button onclick="prepareFormDataAndSubmit()" type="submit" name="datainsert" value="Place Order" class="buttencss" >Place Order</button>
                </div>
                <?php } ?>

        <!-- Drinks starts from here -->
        <?php 
                if(isset($_POST['drinks'])){ ?>
                    <h2 class="stateh2">Drinks Menu</h2>
                    <div class="starter">
                        <div class="flex">
                            <div class="statermenu">
                                <div class="imagegaping"><img src="./static/Drinks/butter-milk.jpg" class="panner"></div>
                                <h4 class="dishname">Butter Milk</h4>
                                <h4 class="pannerrate">₹40</h4>
                                <div class="incdec">
                                    <button onclick="decrement(1)" class="decrementButton">-</button>
                                    <span id="value1" class="display">0</span>
                                    <button onclick="increment(1)" class="incrementButton">+</button>
                                </div>
                            </div>

                            <div class="statermenu">
                                <img src="./static/Drinks/lassi.png" class="panner">
                                <h4 class="dishname">Lassi</h4>
                                <h4 class="pannerrate">₹70</h4>
                                <div class="incdec">
                                    <button onclick="decrement(2)" class="decrementButton">-</button>
                                    <span id="value2" class="display">0</span>
                                    <button onclick="increment(2)" class="incrementButton">+</button>
                                </div>
                            </div>

                        </div>
                        <div class="flex">
                            <div class="statermenu">
                                <img src="./static/Drinks/coke.png " class="panner">
                                <h4 class="dishname">Coca Cola</h4>
                                <h4 class="pannerrate">₹120</h4>
                                <div class="incdec">
                                    <button onclick="decrement(3)" class="decrementButton">-</button>
                                    <span id="value3" class="display">0</span>
                                    <button onclick="increment(3)" class="incrementButton">+</button>
                                </div>
                            </div>

                            <div class="statermenu">
                                <img src="./static/Drinks/coldcoco.jpg" class="panner">
                                <h4 class="dishname">Cold Coco</h4>
                                <h4 class="pannerrate">₹120</h4>
                                <div class="incdec">
                                    <button onclick="decrement(4)" class="decrementButton">-</button>
                                    <span id="value4" class="display">0</span>
                                    <button onclick="increment(4)" class="incrementButton">+</button>
                                </div>
                            </div>

                        </div>
                        <div class="flex">
                            <div class="statermenu">
                                <img src="./static/Drinks/sprite.jpeg" class="panner">
                                <h4 class="dishname">Sprite</h4>
                                <h4 class="pannerrate">₹120</h4>
                                <div class="incdec">
                                    <button onclick="decrement(5)" class="decrementButton">-</button>
                                    <span id="value5" class="display">0</span>
                                    <button onclick="increment(5)" class="incrementButton">+</button>
                                </div>
                            </div>

                            <div class="statermenu">
                                <img src="./static/Drinks/pepsi.jpg" class="panner">
                                <h4 class="dishname">Pepsi</h4>
                                <h4 class="pannerrate">₹120</h4>
                                <div class="incdec">
                                    <button onclick="decrement(6)" class="decrementButton">-</button>
                                    <span id="value6" class="display">0</span>
                                    <button onclick="increment(6)" class="incrementButton">+</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <form id="orderForm" action="datainsert.php" method="post">
                        <?php
                            // Loop through each dish and its quantity
                            for ($i = 1; $i <= count($_POST) / 2; $i++) {
                                $dish = $_POST["dish$i"];
                                $quantity = $_POST["quantity$i"];
                                // Create hidden input fields for each dish and quantity
                                echo "<input type='hidden' name='dish$i' value='$dish'>";
                                echo "<input type='hidden' name='quantity$i' value='$quantity'>";
                            }
                            ?>
                    </form> 
                        <button onclick="prepareFormDataAndSubmit()" type="submit" name="datainsert" value="Place Order" class="buttencss" >Place Order</button>
                </div>
                <?php } ?>
                    
        <!-- dil-rice starts from here -->
        <?php 
        if(isset($_POST['dalrice'])){ ?>
            <h2 class="stateh2">Rice & Dal Menu</h2>
            <div class="starter">
                <div class="flex">
                    <div class="statermenu">
                        <div class="imagegaping"><img src="./static/rice/rice.jpg" class="panner"></div>
                        <h4 class="dishname">Rice</h4>
                        <h4 class="pannerrate">₹250</h4>
                        <div class="incdec">
                            <button onclick="decrement(1)" class="decrementButton">-</button>
                            <span id="value1" class="display">0</span>
                            <button onclick="increment(1)" class="incrementButton">+</button>
                        </div>
                    </div>

                    <div class="statermenu">
                        <img src="./static/rice/jeera-rice.jpg" class="panner">
                        <h4 class="dishname">Jeera Rice</h4>
                        <h4 class="pannerrate">₹270</h4>
                        <div class="incdec">
                            <button onclick="decrement(2)" class="decrementButton">-</button>
                            <span id="value2" class="display">0</span>
                            <button onclick="increment(2)" class="incrementButton">+</button>
                        </div>
                    </div>

                </div>
                <div class="flex">
                    <div class="statermenu">
                        <img src="./static/rice/pulav.jpg" class="panner">
                        <h4 class="dishname">Pulav</h4>
                        <h4 class="pannerrate">₹280</h4>
                        <div class="incdec">
                            <button onclick="decrement(3)" class="decrementButton">-</button>
                            <span id="value3" class="display">0</span>
                            <button onclick="increment(3)" class="incrementButton">+</button>
                        </div>
                    </div>

                    <div class="statermenu">
                        <img src="./static/rice/fried-rice.jpg" class="panner">
                        <h4 class="dishname">Veg Fried Rice</h4>
                        <h4 class="pannerrate">₹230</h4>
                        <div class="incdec">
                            <button onclick="decrement(4)" class="decrementButton">-</button>
                            <span id="value4" class="display">0</span>
                            <button onclick="increment(4)" class="incrementButton">+</button>
                        </div>
                    </div>

                </div>
                <div class="flex">
                    <div class="statermenu">
                        <img src="./static/rice/dal_fry.jpg" class="panner">
                        <h4 class="dishname">Dal Fry</h4>
                        <h4 class="pannerrate">₹220</h4>
                        <div class="incdec">
                            <button onclick="decrement(5)" class="decrementButton">-</button>
                            <span id="value5" class="display">0</span>
                            <button onclick="increment(5)" class="incrementButton">+</button>
                        </div>
                    </div>

                    <div class="statermenu">
                        <img src="./static/rice/dal-makhni.jpg" class="panner">
                        <h4 class="dishname">Dal Makhni</h4>
                        <h4 class="pannerrate">₹310</h4>
                        <div class="incdec">
                            <button onclick="decrement(6)" class="decrementButton">-</button>
                            <span id="value6" class="display">0</span>
                            <button onclick="increment(6)" class="incrementButton">+</button>
                        </div>
                    </div>
                    
                </div>
            </div>
            <form id="orderForm" action="datainsert.php" method="post">
                <?php
                    // Loop through each dish and its quantity
                    for ($i = 1; $i <= count($_POST) / 2; $i++) {
                        $dish = $_POST["dish$i"];
                        $quantity = $_POST["quantity$i"];
                        // Create hidden input fields for each dish and quantity
                        echo "<input type='hidden' name='dish$i' value='$dish'>";
                        echo "<input type='hidden' name='quantity$i' value='$quantity'>";
                    }
                    ?>
            </form> 
                <button onclick="prepareFormDataAndSubmit()" type="submit" name="datainsert" value="Place Order" class="buttencss" >Place Order</button>
        </div>
        <?php } ?>

        <!-- Roti starts from here -->
        <?php 
            if(isset($_POST['roti'])){ ?>
                <h2 class="stateh2">Roti Menu</h2>
                <div class="starter">
                    <div class="flex">
                        <div class="statermenu">
                            <div class="imagegaping"><img src="./static/roti/butter_roti.jpg" class="panner"></div>
                            <h4 class="dishname">Butter Roti</h4>
                            <h4 class="pannerrate">₹250</h4>
                            <div class="incdec">
                                <button onclick="decrement(1)" class="decrementButton">-</button>
                                <span id="value1" class="display">0</span>
                                <button onclick="increment(1)" class="incrementButton">+</button>
                            </div>
                        </div>

                        <div class="statermenu">
                            <img src="./static/roti/butter_naan.jpg" class="panner">
                            <h4 class="dishname">Butter Naan</h4>
                            <h4 class="pannerrate">₹270</h4>
                            <div class="incdec">
                                <button onclick="decrement(2)" class="decrementButton">-</button>
                                <span id="value2" class="display">0</span>
                                <button onclick="increment(2)" class="incrementButton">+</button>
                            </div>
                        </div>

                    </div>
                    <div class="flex">
                        <div class="statermenu">
                            <img src="./static/roti/chur-chur-naan.jpg" class="panner">
                            <h4 class="dishname">Chur Chur Naan</h4>
                            <h4 class="pannerrate">₹280</h4>
                            <div class="incdec">
                                <button onclick="decrement(3)" class="decrementButton">-</button>
                                <span id="value3" class="display">0</span>
                                <button onclick="increment(3)" class="incrementButton">+</button>
                            </div>
                        </div>

                        <div class="statermenu">
                            <img src="./static/roti/lachha-paratha.png" class="panner">
                            <h4 class="dishname">Lachha Paratha</h4>
                            <h4 class="pannerrate">₹230</h4>
                            <div class="incdec">
                                <button onclick="decrement(4)" class="decrementButton">-</button>
                                <span id="value4" class="display">0</span>
                                <button onclick="increment(4)" class="incrementButton">+</button>
                            </div>
                        </div>

                    </div>
                    <div class="flex">
                        <div class="statermenu">
                            <img src="./static/roti/kashmiri-paratha-2.png" class="panner">
                            <h4 class="dishname">Kashmiri Paratha</h4>
                            <h4 class="pannerrate">₹220</h4>
                            <div class="incdec">
                                <button onclick="decrement(5)" class="decrementButton">-</button>
                                <span id="value5" class="display">0</span>
                                <button onclick="increment(5)" class="incrementButton">+</button>
                            </div>
                        </div>

                        <div class="statermenu">
                            <img src="./static/roti/aloo-paratha.jpg" class="panner">
                            <h4 class="dishname">Aloo Paratha</h4>
                            <h4 class="pannerrate">₹310</h4>
                            <div class="incdec">
                                <button onclick="decrement(6)" class="decrementButton">-</button>
                                <span id="value6" class="display">0</span>
                                <button onclick="increment(6)" class="incrementButton">+</button>
                            </div>
                        </div>

                    </div>
                </div>
                <form id="orderForm" action="datainsert.php" method="post">
                        <?php
                            // Loop through each dish and its quantity
                            for ($i = 1; $i <= count($_POST) / 2; $i++) {
                                $dish = $_POST["dish$i"];
                                $quantity = $_POST["quantity$i"];
                                // Create hidden input fields for each dish and quantity
                                echo "<input type='hidden' name='dish$i' value='$dish'>";
                                echo "<input type='hidden' name='quantity$i' value='$quantity'>";
                            }
                            ?>
                </form> 
                        <button onclick="prepareFormDataAndSubmit()" type="submit" name="datainsert" value="Place Order" class="buttencss" >Place Order</button>
            </div>
            <?php } ?>
        <!-- sabji starts from here -->
            <?php 
                if(isset($_POST['sajbi'])){?>
                    <h2 class="stateh2">Sabji Menu</h2>
                    <div class="starter">
                        <div class="flex">
                            <div class="statermenu">
                                <div class="imagegaping"><img src="./static/sabji/palak-paneer.jpg" class="panner"></div>
                                <h4 class="dishname">Palak Paneer</h4>
                                <h4 class="pannerrate">₹250</h4>
                                <div class="incdec">
                                    <button onclick="decrement(1)" class="decrementButton">-</button>
                                    <span id="value1" class="display">0</span>
                                    <button onclick="increment(1)" class="incrementButton">+</button>
                                </div>
                            </div>

                            <div class="statermenu">
                                <img src="./static/sabji/paneer-makhanwala.jpg" class="panner">
                                <h4 class="dishname">Paneer Makhanwala</h4>
                                <h4 class="pannerrate">₹270</h4>
                                <div class="incdec">
                                    <button onclick="decrement(2)" class="decrementButton">-</button>
                                    <span id="value2" class="display">0</span>
                                    <button onclick="increment(2)" class="incrementButton">+</button>
                                </div>
                            </div>

                        </div>
                        <div class="flex">
                            <div class="statermenu">
                                <img src="./static/sabji/paneercheese.jpg" class="panner">
                                <h4 class="dishname">Paneer Cheese</h4>
                                <h4 class="pannerrate">₹280</h4>
                                <div class="incdec">
                                    <button onclick="decrement(3)" class="decrementButton">-</button>
                                    <span id="value3" class="display">0</span>
                                    <button onclick="increment(3)" class="incrementButton">+</button>
                                </div>
                            </div>

                            <div class="statermenu">
                                <img src="./static/sabji/paneerhandi.jpg" class="panner">
                                <h4 class="dishname">Paneer Handi</h4>
                                <h4 class="pannerrate">₹230</h4>
                                <div class="incdec">
                                    <button onclick="decrement(4)" class="decrementButton">-</button>
                                    <span id="value4" class="display">0</span>
                                    <button onclick="increment(4)" class="incrementButton">+</button>
                                </div>
                            </div>

                        </div>
                        <div class="flex">
                            <div class="statermenu">
                                <img src="./static/sabji/paneer-butter-masala.png" class="panner">
                                <h4 class="dishname">Paneer Butter Masala</h4>
                                <h4 class="pannerrate">₹220</h4>
                                <div class="incdec">
                                    <button onclick="decrement(5)" class="decrementButton">-</button>
                                    <span id="value5" class="display">0</span>
                                    <button onclick="increment(5)" class="incrementButton">+</button>
                                </div>
                            </div>

                            <div class="statermenu">
                                <img src="./static/sabji/sahi-paneer.png" class="panner">
                                <h4 class="dishname">Shahi Paneer</h4>
                                <h4 class="pannerrate">₹310</h4>
                                <div class="incdec">
                                    <button onclick="decrement(6)" class="decrementButton">-</button>
                                    <span id="value6" class="display">0</span>
                                    <button onclick="increment(6)" class="incrementButton">+</button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <form id="orderForm" action="datainsert.php" method="post">
                        <?php
                            // Loop through each dish and its quantity
                            for ($i = 1; $i <= count($_POST) / 2; $i++) {
                                $dish = $_POST["dish$i"];
                                $quantity = $_POST["quantity$i"];
                                // Create hidden input fields for each dish and quantity
                                echo "<input type='hidden' name='dish$i' value='$dish'>";
                                echo "<input type='hidden' name='quantity$i' value='$quantity'>";
                            }
                            ?>
                    </form> 
                        <button onclick="prepareFormDataAndSubmit()" type="submit" name="datainsert" value="Place Order" class="buttencss" >Place Order</button>
                </div>
            <?php } ?>
        </div>
        
    <script>

        function increment(index) 
        {
                var valueElement = document.getElementById('value' + index);
                var value = parseInt(valueElement.textContent);
                valueElement.textContent = value + 1;
        }
        function decrement(index) 
        {
            var valueElement = document.getElementById('value' + index);
            var value = parseInt(valueElement.textContent);
            if (value > 0) {
            valueElement.textContent = value - 1;
            }
        }

        function prepareFormDataAndSubmit() {
            var form = document.getElementById('orderForm');
            var dishes = document.querySelectorAll('.statermenu');

            dishes.forEach(function(dish, index) {
                var dishName = dish.querySelector('.dishname').textContent;
                var quantity = dish.querySelector('.display').textContent;

                // Create hidden input fields for each dish and quantity
                var inputName = document.createElement('input');
                inputName.type = 'hidden';
                inputName.name = 'dish' + (index + 1);
                inputName.value = dishName;
                form.appendChild(inputName);

                var inputQuantity = document.createElement('input');
                inputQuantity.type = 'hidden';
                inputQuantity.name = 'quantity' + (index + 1);
                inputQuantity.value = quantity;
                form.appendChild(inputQuantity);
            });

            // Submit the form
            form.submit();
        }
    </script>
</body>
</html>