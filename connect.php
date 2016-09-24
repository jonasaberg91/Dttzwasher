<?php
function Connect(){
    $dbhost = 'rasmusandersson.com.mysql';
    $dbuser = 'rasmusandersson_com';
    $dbname = 'rasmusandersson_com';
    $dbpass = 'AvyC5DJh';
    
    $dbcon = new mysqli ($dbhost, $dbuser, $dbpass, $dbname);
    
    if (!$dbcon) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    
    echo "Success: Connected successfully! <br>" . PHP_EOL;
    //echo "Host information: " . mysqli_get_host_info($dbcon) . PHP_EOL;
    
    return ($dbcon);
}
?>