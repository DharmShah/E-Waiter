<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db = "dharmshah";

        $conn = new mysqli($servername, $username, $password, $db);
        if ($conn) {
            echo "database connected";
        } else {
            echo "error";
        }

        $sql = "TRUNCATE TABLE orders";

        if ($conn->query($sql) === TRUE) {
            echo "All rows deleted successfully";
            header("Location: home.php");
            exit();
        } else {
            echo "Error truncating table: " . $conn->error;
        }
    ?>
</body>
</html>
