<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./static/datainsert.css">
</head>
<body>
    <div class="maindatainsert">
    <div class="navbarmenu">
            <form action="./menu.php"><button class="left-arrow-button"><img src="./static/left-arrow.png" class="leftmenuicon"></button></form>
            <div class="selectedTableInfo">
                <form action="./innermenu.php" method="post">
                    <div class="tableshowing">
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
                    session_abort();
                ?>
                    </div>
                </form>
            </div>
            <img src="./static/cart.png" class="rightmenuicon" >
        </div>
            
        <?php  
        $servername="localhost";
        $username = "root";
        $password = "";
        $db = "dharmshah";
        $conn = new mysqli($servername,$username,$password,$db);
        $select_query = "SELECT * FROM orders";
        $select_data = mysqli_query($conn,$select_query);
        ?>
        <table class="table" border="1">
            <tr>
                <td>Id</td>
                <td>Dish Name</td>
                <td>Quantity</td>
            </tr>            
            <?php while($row=mysqli_fetch_array($select_data)){?>
                <?php if($row['quantity'] > 0) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['dish']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                </tr>
            <?php } ?>
            <?php } ?>
        </table>
        <form action="menu.php" method="post">
                <input type="submit" name="billing" value="Order for Bill" class="buttencss1">
        </form>
    </div>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "dharmshah";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    for ($i = 1; $i <= count($_POST) / 2; $i++) {
        $dish = $_POST["dish$i"];
        $quantity = $_POST["quantity$i"];
        $sql = "INSERT INTO orders (dish, quantity) VALUES ('$dish', '$quantity')";
        if (mysqli_query($conn, $sql)) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
} else {
    echo "Form submission failed.";
}
mysqli_close($conn);
?>
</body>
</html>