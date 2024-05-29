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
            <div class="table_print">
            <?php
            // Connect to the database
            $servername = "localhost";
            $username = "root"; // Your MySQL username
            $password = ""; // Your MySQL password
            $dbname = "dharmshah";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve data from orders table
            $sql = "SELECT dish, quantity FROM orders";
            $result = $conn->query($sql);

            // Initialize variables for total calculation
            $total = 0;

            if ($result->num_rows > 0) {
                // Output data in table format
                echo "<table border='1'>";
                echo "<tr><th>Dish</th><th>Quantity</th><th>Rate</th><th>Subtotal</th></tr>";
                
                // Loop through each row
                while($row = $result->fetch_assoc()) {
                    $dish_name = $row["dish"];
                    $quantity = $row["quantity"];
                    
                    // Skip if quantity is less than or equal to 0
                    if ($quantity <= 0) {
                        continue;
                    }
                    
                    // Retrieve rate from dish_rate table
                    $rate_sql = "SELECT rate FROM dish_rate WHERE dish='$dish_name'";
                    $rate_result = $conn->query($rate_sql);
                    
                    if ($rate_result->num_rows > 0) {
                        $rate_row = $rate_result->fetch_assoc();
                        $rate = $rate_row["rate"];
                        
                        // Calculate subtotal for each item
                        $subtotal = $quantity * $rate;
                        $total += $subtotal;
                        
                        // Output the item details in table row format
                        echo "<tr><td>$dish_name</td><td>$quantity</td><td>$rate</td><td>$subtotal</td></tr>";
                    } else {
                        echo "Rate not found for dish: $dish_name <br>";
                    }
                }
                
                // Output total bill amount
                echo "<tr><td colspan='3'>Total Bill</td><td>$total</td></tr>";
                echo "</table>";
            } else {
                echo "0 results";
            }

            // Close connection
            $conn->close();
            ?>
            </div>
        </div>
        <div class="cleartable">
            <form action="cleartable.php" method="post" ><input type="submit" name="cleartable" value="Clear Table"></form>
        </div>
    </div>
</body>
</html>
