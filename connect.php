<?php
    $host - '';
    $user - '';
    $pass = '';
    $db_name = '';

    $conn = new mysqli($host, $user, $pass, $db_name);
    if($conn->connect_error) {
        die('connect error: '. $conn->connect_error);
    }



?>
