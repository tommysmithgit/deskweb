<?php
    $servername = "localhost";
    $username = "fufohouse";
    $password = "Fufo-House20";
    $db = "fufohous_cuongvu";
    $conn = new mysqli($servername, $username, $password, $db );
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
?>