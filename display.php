
<?php
    // Check if the chosen color is stored in the cookie
    if (isset($_COOKIE["chosenColor"])) {
        // Get the chosen color from the cookie and set it as the background
        $chosenColor = $_COOKIE["chosenColor"];
    }
?>


<!DOCTYPE html>
<html>
<head>

</head>
<body style="background-color: <?php echo $chosenColor; ?>;" >

</body>
</html>
