<?php include 'database.php'; ?>

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

        $select_query = "SELECT * FROM $selectedTable";
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
        <form action="billing.php" method="post">
                <input type="submit" name="billing" value="Order for Bill" class="buttencss1">
        </form>
    </div>
</body>
</html>