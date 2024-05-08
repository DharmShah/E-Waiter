<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./static/main.css">
</head>
<?php
    session_start();    
    $_SESSION['selected_table']  = NULL;
?>
<body>        
    <div class="container">
        <form action="./menu.php" method="post">
            <div class="navbar">
                <h1 class="center">Tables</h1>
            </div>
            <div class="place">
                <button type="submit" class="mainroom" name="place" value="Main Room">Main Room</button>
                <button type="submit" class="terrace" name="place" value="Terrace">Terrace</button>
            </div>
            <div class="marginleft">
                <button type="submit" name="table" value="Table1" class="button"><img src="./static/1.png " class="imgresize"></button>
                <button type="submit" name="table" value="Table9" class="button"><img src="./static/9.png " class="imgresize"></button>
                <button type="submit" name="table" value="Table5" class="button"><img src="./static/5.png " class="imgresize"></button>
            </div>
            <div class="marginleft">
                <button type="submit" name="table" value="Table2" class="button"><img src="./static/2.png " class="imgresize"></button>
                <button type="submit" name="table" value="Table10" class="button"><img src="./static/10.png " class="imgresize"></button>
                <button type="submit" name="table" value="Table6" class="button"><img src="./static/6.png " class="imgresize"></button>
            </div>
            <div class="marginleft">
                <button type="submit" name="table" value="Table3" class="button"><img src="./static/3.png " class="imgresize"></button>
                <button type="submit" name="table" value="Table11" class="button"><img src="./static/11.png " class="imgresize"></button>
                <button type="submit" name="table" value="Table7" class="button"><img src="./static/7.png " class="imgresize"></button>
            </div>
            <div class="marginleft">
                <button type="submit" name="table" value="Table4" class="button"><img src="./static/4.png " class="imgresize"></button>
                <button type="submit" name="table" value="Table12" class="button"><img src="./static/12.png " class="imgresize"></button>
                <button type="submit" name="table" value="Table8" class="button"><img src="./static/8.png " class="imgresize"></button>
            </div>        
        </form>
    </div>

    <?php

        if(isset($_POST['table']))
        {
            $_SESSION['selected_table'] = $_POST['table'];

        }
    ?>
</body>
</html>