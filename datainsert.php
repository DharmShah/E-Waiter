<?php include 'cursor_magic.php'; ?>
<?php include 'database.php'; ?>
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
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    for ($i = 1; $i <= count($_POST) / 2; $i++) {
        $dish = $_POST["dish$i"];
        $quantity = $_POST["quantity$i"];
            if ($quantity > 0) {
            $sql = "INSERT INTO $selectedTable (dish, quantity) VALUES ('$dish', '$quantity')";
            if (mysqli_query($conn, $sql)) {
                echo "";
                header("Location: order.php");
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
} else {
    echo "Form submission failed.";
}
mysqli_close($conn);
?>
</body>
</html>