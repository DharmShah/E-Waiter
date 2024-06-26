<?php include 'cursor_magic.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./static/main.css">
    <script>
        function changeImage(button) {
            var imageName = button.id + "un.png";
            button.getElementsByTagName("img")[0].src = "./static/" + imageName;
            // Store the changed image path in local storage
            localStorage.setItem(button.id, imageName);
        }

        // Function to load previously changed images from local storage
        function loadChangedImages() {
            var buttons = document.querySelectorAll('.button');
            buttons.forEach(function(button) {
                var imageName = localStorage.getItem(button.id);
                if (imageName) {
                    button.getElementsByTagName("img")[0].src = "./static/" + imageName;
                }
            });
        }

        // Call the loadChangedImages function when the page loads
        window.onload = function() {
            loadChangedImages();
        };
    </script>
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
                <button type="submit" name="table" id="1" value="Table1" class="button" onclick="changeImage(this)"><img src="./static/1.png" class="imgresize"></button>
                <button type="submit" name="table" id="9" value="Table9" class="button" onclick="changeImage(this)"><img src="./static/9.png" class="imgresize"></button>
                <button type="submit" name="table" id="5" value="Table5" class="button" onclick="changeImage(this)"><img src="./static/5.png" class="imgresize"></button>
            </div>
            <div class="marginleft">
                <button type="submit" name="table" id="2" value="Table2" class="button" onclick="changeImage(this)"><img src="./static/2.png" class="imgresize"></button>
                <button type="submit" name="table" id="10" value="Table10" class="button" onclick="changeImage(this)"><img src="./static/10.png" class="imgresize"></button>
                <button type="submit" name="table" id="6" value="Table6" class="button" onclick="changeImage(this)"><img src="./static/6.png" class="imgresize"></button>
            </div>
            <div class="marginleft">
                <button type="submit" name="table" id="3" value="Table3" class="button" onclick="changeImage(this)"><img src="./static/3.png" class="imgresize"></button>
                <button type="submit" name="table" id="11" value="Table11" class="button" onclick="changeImage(this)"><img src="./static/11.png" class="imgresize"></button>
                <button type="submit" name="table" id="7" value="Table7" class="button" onclick="changeImage(this)"><img src="./static/7.png" class="imgresize"></button>
            </div>
            <div class="marginleft">
                <button type="submit" name="table" id="4" value="Table4" class="button" onclick="changeImage(this)"><img src="./static/4.png" class="imgresize"></button>
                <button type="submit" name="table" id="12" value="Table12" class="button" onclick="changeImage(this)"><img src="./static/12.png" class="imgresize"></button>
                <button type="submit" name="table" id="8" value="Table8" class="button" onclick="changeImage(this)"><img src="./static/8.png" class="imgresize"></button>
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