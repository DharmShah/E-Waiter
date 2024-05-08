<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="./static/menu.css">
</head>
<body>    
    <div class="menumain">
        <div class="navbarmenu">
            <form action="./home.php"><button class="left-arrow-button"><img src="./static/left-arrow.png" class="leftmenuicon"></button></form>
            <div class="selectedTableInfo">
                <form action="./innermenu1.php" method="post">
                <?php
                    session_start();
                    if(isset($_SESSION['selected_table'])){
                        $selectedTable = $_SESSION['selected_table'];
                        echo "<h2>$selectedTable</h2>";
                    } else {
                        if(isset($_POST['table'])) 
                        {
                            
                            $selectedTable = $_POST['table'];
                            $_SESSION['selected_table'] = $selectedTable;
                            echo "<h2>$selectedTable</h2>";
                        }
                        else {
                            echo "<p>No table selected.</p>";
                        }
                    }
                ?>
                </form>
            </div>
            <img src="./static/cart.png" class="rightmenuicon" >
        </div>
        <div class="search">
            <img src="./static/search1.png" class="searchicon">
            <input type="text" name="search" placeholder="search" class="searchinput">
        </div>

        <div class="foodicons">
            <img src="./static/pizza.png" class="iconfood">
            <img src="./static/dessert.png" class="iconfood">
            <img src="./static/drinks.png" class="iconfood">
            <img src="./static/roti.png" class="iconfood">
            <img src="./static/sabji.png" class="iconfood">
            <img src="./static/biryani.png" class="iconfood">
        </div>

        <form action="innermenu.php" method="post">
            <div class="food-item-div1">
                <div class="stater1"><img src="./static/starter/pizza.png" class="imagecut1"><h2 class="statername">Starter</h2><button type="submit" class="buttondrink" name="starter">Order</button></div>
                <div class="stater2"><img src="./static/desert/ice-cream.jpeg" class="imagecut2"><h2 class="statername" name="icecream">Desert</h2><button name="icecream" class="buttondrink">Order</button></div>
                <div class="stater3"><img src="./static/Drinks/drink.jpeg" class="imagecut3"><h2 class="staternamedrink">Drinks</h2><button class="buttondrink" name="drinks">Order</button></div>
            </div>

            <div class="food-item-div2">
                <div class="stater-1"><img src="./static/rice/dalrice.jpeg" class="imagecut-2"><h3 class="statername">Dal-Rice</h3><button class="buttondal" name="dalrice">Order</button></div>
                <div class="stater-2"><img src="./static/roti/roti.jpeg" class="imagecut-3"><h2 class="statername">Roti</h2><button class="buttondal" name="roti">Order</button></div>
                <div class="stater-3"><img src="./static/sabji/sabji.jpeg" class="imagecut4"><h2 class="statername">Sabji</h2><button class="buttondal" name="sajbi">Order</button></div>
            </div>
            
        </form>
            <form action="billing.php" method="post">
                <input type="submit" name="billing" value="Order for Bill" class="buttencss1">
            </form>
        </div>
    </div>
</body>
</html>