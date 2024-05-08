<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./static/billing.css">
</head>
<body>
    <div class="center">
        <div class="navbarmenu">
                <form action="./menu.php"><button class="left-arrow-button"><img src="./static/left-arrow.png" class="leftmenuicon"></button></form>
                <h2 class="hadding">E-Waiter Management System</h2>
        </div>
        <hr>
        <div class="invoice">
            <h2>Hello WORLD</h2>
            <h3>Date - <?php $date = date('l, F j, Y');echo $date;?></h3>
            <h4>Address - Department of Animation , Gujarat University, 380009</h4>
        </div>
        <hr color="black">
        <div class="showingtable">
            <h2>INVOICE</h2>
            <?php  

            $servername="localhost";
            $username = "root";
            $password = "";
            $db = "dharmshah";

            $conn = new mysqli($servername,$username,$password,$db);

            $select_query = "SELECT * FROM orders";
            $select_data = mysqli_query($conn,$select_query);
            $total = 0;
            ?>
            <table class="table">
                <tr>
                    <td>ID</td>
                    <td>Dish</td>
                    <td>qty</td>
                    <!-- <td>price</td> -->
                    <td>Sub Total</td>
                </tr>
                
                <?php while($row=mysqli_fetch_array($select_data)){?>
                    <?php if($row['quantity'] > 0) { ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['dish']; ?></td>
                        <td><?php echo $row['quantity']; ?></td>
                        <td><?php echo $row['quantity'] * 5; ?></td>
                        <?php $total += $row['quantity'] * 5;?> 
                    </tr>
    <?php } ?>
                <?php } ?>
            </table>
            <div class="totalkadiv">
                <h3 class="totalname">Total</h3>
                <h3 colspan='6' class="total"><?php echo $total ; ?></h3>
            </div>            
        </div>
        <div class="cleartable">
            <form action="cleartable.php" method="post" ><input type="submit" name="cleartable" value="Clear Table"></form>
        </div>
    </div>
</body>
</html>
