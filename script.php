<?php
    function connect(){
    $dbhost = 'rasmusandersson.com.mysql';
    $dbuser = 'rasmusandersson_com';
    $dbname = 'rasmusandersson_com';
    $dbpass = 'AvyC5DJh';
    
    $dbcon = new mysqli ($dbhost, $dbuser, $dbpass, $dbname);
    return ($dbcon);
    }

    $dbcon = Connect();
    
    $name    = $dbcon->real_escape_string(safe($_POST['dw_f_name']));
    $date   = $dbcon->real_escape_string(safe($_POST['dw_f_date']));
    
    function safe($data){
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }
    
    $query = "INSERT into DW (Date,Name) VALUES('" . $date . "','" . $name . "')";
    $success = $dbcon->query($query);
    
    if(!$success){
        die ("Could not enter data " . $dbcon->error);
    }else{
        header("Location: http://rasmusandersson.com/dishwasher.php");
        exit; 
    }
    $dbcon->close();
    
?>
