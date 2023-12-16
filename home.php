<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the chosen color from the form
    $chosenColor = $_POST["color"];

    // Store the chosen color in a cookie with a 24-hour expiration time
    setcookie("chosenColor", $chosenColor, time() + 86400, "/"); // 86400 seconds = 24 hours

    // Redirect to the third page
    header("Location: display.php");
    exit(); // The exit function is called immediately after setting the Location header. It is used to halt the execution of the script. In this context, it ensures that no further PHP code is executed after the redirection header is sent. This is important because sending the Location header doesn't automatically stop the script execution. Without exit, the script would continue to execute any code that follows, potentially causing unexpected behavior.
} // the exit() function ensures that the script stops executing immediately after the redirection header is sent.
?>
