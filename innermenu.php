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
        $all_foods = array(
            "starter" => array(
                ["img"=>"./static/starter/manchaow-soup.jpeg","name" => "manchowsoup", "rate" => "120₹"],
                ["img"=>"./static/starter/tomato-soup.jpeg","name" => "tomatosoup", "rate" => "110₹"],
                ["img"=>"./static/starter/noodles.jpg","name" => "noodles", "rate" => "200₹"],
                ["img"=>"./static/starter/veg-manchurian.jpg","name" => "manchuriyan", "rate" => "220₹"],
                ["img"=>"./static/starter/panner-chapp.jpg","name" => "pannerchapp", "rate" => "150₹"],
                ["img"=>"./static/starter/kabab.jpeg","name" => "kabab", "rate" => "220₹"]
            ),
            "desert" => array(
                ["img"=>"./static/desert/cake1.png","name" => "cake", "rate" => "250₹"],
                ["img"=>"./static/desert/sundae_Icecream.jpg","name" => "icecream", "rate" => "270₹"],
                ["img"=>"./static/desert/kulfi.jpg","name" => "kulfi", "rate" => "280₹"],
                ["img"=>"./static/desert/rabdi.jpg","name" => "rabdi", "rate" => "230₹"],
                ["img"=>"./static/desert/jalebi.png","name" => "jalebi", "rate" => "220₹"],
                ["img"=>"./static/desert/browni.jpg","name" => "browni", "rate" => "310₹"]
            ),
            "drinks" => array(
                ["img"=>"./static/Drinks/butter-milk.jpg","name" => "buttermilk", "rate" => "40₹"],
                ["img"=>"./static/Drinks/lassi.png","name" => "lassi", "rate" => "70₹"],
                ["img"=>"./static/Drinks/coke.png","name" => "cocacola", "rate" => "120₹"],
                ["img"=>"./static/Drinks/coldcoco.jpg","name" => "coldcoco", "rate" => "120₹"],
                ["img"=>"./static/Drinks/sprite.jpeg","name" => "sprite", "rate" => "120₹"],
                ["img"=>"./static/Drinks/pepsi.jpg","name" => "pepsi", "rate" => "120₹"]
            ),
            "dal_rice" => array(
                ["img"=>"./static/rice/rice.jpg","name" => "rice", "rate" => "120₹"],
                ["img"=>"./static/rice/jeera-rice.jpg","name" => "jeerarice", "rate" => "150₹"],
                ["img"=>"./static/rice/pulav.jpg","name" => "pulav", "rate" => "180₹"],
                ["img"=>"./static/rice/fried-rice.jpg","name" => "vegfriedrice", "rate" => "160₹"],
                ["img"=>"./static/rice/dal_fry.jpg","name" => "dalfry", "rate" => "210₹"],
                ["img"=>"./static/rice/dal-makhni.jpg","name" => "dalmakhni", "rate" => "210₹"]
            ),
            "roti" => array(
                ["img"=>"./static/roti/butter_roti.jpg","name" => "butterroti", "rate" => "25₹"],
                ["img"=>"./static/roti/butter_naan.jpg","name" => "butternaan", "rate" => "45₹"],
                ["img"=>"./static/roti/chur-chur-naan.jpg","name" => "churchurnaan", "rate" => "50₹"],
                ["img"=>"./static/roti/lachha-paratha.png","name" => "lachaparatha", "rate" => "60₹"],
                ["img"=>"./static/roti/kashmiri-paratha-2.png","name" => "kashmiriparatha", "rate" => "65₹"],
                ["img"=>"./static/roti/aloo-paratha.jpg","name" => "allooparatha", "rate" => "80₹"]
            ),
            "sabji" => array(
                ["img"=>"./static/sabji/palak-paneer.jpg","name" => "palakpanner", "rate" => "250₹"],
                ["img"=>"./static/sabji/paneer-makhanwala.jpg","name" => "pannermakhanwala", "rate" => "270₹"],
                ["img"=>"./static/sabji/paneercheese.jpg","name" => "pannerchees", "rate" => "280₹"],
                ["img"=>"./static/sabji/paneerhandi.jpg","name" => "pannerhandi", "rate" => "230₹"],
                ["img"=>"./static/sabji/paneer-butter-masala.png","name" => "pannerbuttermasala", "rate" => "220₹"],
                ["img"=>"./static/sabji/sahi-paneer.png","name" => "sahipanner", "rate" => "310₹"]
            )
        );
        $currentcat =  $_GET["cat"]; ?>
                <h2 class="stateh2"><?php echo $currentcat . " Menu"; ?></h2>
                <div class="starter">
                    <?php 
                    $counter = 0;
                    $value = 1;
                    for($i = 0;  $i < 3; $i++) {
                    ?>
                    <div class="flex">
                        <div class="statermenu">
                            <div class="imagegaping"><img src="<?php echo $all_foods[$currentcat][$counter]["img"]; ?>" class="panner"></div>
                            <h4 class="dishname" name="manchaow"><?php echo $all_foods[$currentcat][$counter]["name"]; ?></h4>
                            <h4 class="pannerrate"><?php echo $all_foods[$currentcat][$counter]["rate"]; ?></h4>
                            <div class="incdec">
                                <button onclick="decrement(<?php echo $value ?>)" class="decrementButton">-</button>
                                <span id="value<?php echo $value ?>" class="display" name="span1">0</span>
                                <button onclick="increment(<?php echo $value ?>)" class="incrementButton">+</button>
                            </div>
                        </div>
                        <?php $value++ ?>
                        <?php $counter++ ?>
                        <div class="statermenu">
                            <img src="<?php echo $all_foods[$currentcat][$counter]["img"]; ?>" class="panner">
                            <h4 class="dishname" name="tomato" ><?php echo $all_foods[$currentcat][$counter]["name"]; ?></h4>
                            <h4 class="pannerrate"><?php echo $all_foods[$currentcat][$counter]["rate"]; ?></h4>
                            <div class="incdec">
                                <button onclick="decrement(<?php echo $value ?>)" class="decrementButton">-</button>
                                <span id="value<?php echo $value ?>" class="display" name="span2">0</span>
                                <button onclick="increment(<?php echo $value ?>)" class="incrementButton">+</button>
                            </div>
                        </div>
                    </div>
                    <?php
                    $counter++;
                    $value++;
                    }
                    ?>         
                    <form id="orderForm" action="datainsert.php" method="post">
                        <?php
                            for ($i = 1; $i <= count($_POST) / 2; $i++) {
                                $dish = $_POST["dish$i"];
                                $quantity = $_POST["quantity$i"];
                                echo "<input type='hidden' name='dish$i' value='$dish'>";
                                echo "<input type='hidden' name='quantity$i' value='$quantity'>";
                            }
                            ?>
                    </form> 
                        <button onclick="prepareFormDataAndSubmit()" type="submit" name="datainsert" value="Place Order" class="buttencss" >Place Order</button>
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
            form.submit();
        }
    </script>
</body>
</html>