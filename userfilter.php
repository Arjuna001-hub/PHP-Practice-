<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $msg = filter_input(INPUT_POST, 'message');
    echo "Message received: $msg";
} else {
    echo '<form method="POST">
            <input name="message" type="text" placeholder="Enter your message">
            <input type="submit" value="Submit">
          </form>';
}

?>
