<!DOCTYPE HTML>

<html>
    <body>
        <form action="script.php" method="POST">
            
            <?php echo "Date: ";?> <input type="text" name="dw_f_date" method="POST">
            <?php echo " Name: ";?> <input type="text" name="dw_f_name" method="POST">
            
            <input type="submit" value="ADD">
        </form>
    </body>
</html>

<?php 
    
    /*if ($_POST["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['dw_f_date'])){
            echo "Required Field";
        }else{
            $DwDate = $dbcon->real_escape_string(safe($_POST['dw_f_date']));
        }
        
        if(empty($_POST['dw_f_name'])){
            echo "Required Field";
        }else{
            $DwName = $dbcon->real_escape_string(safe($_POST['dw_f_name'])); //php super global to post txt fields. 
        }
    }*/
    require 'connect.php'; //use code in connect.php to connect to mysql db
    $dbcon = connect();
    
    $query1 = "SELECT Date, Name FROM DW";
    $result = $dbcon->query($query1);
    echo "<br>Date: " . " / " . "Name:<br>";
    if($result -> num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo "<br>" . $row['Date'] . "  /  " . $row['Name'];
        }
    }else{
        echo "<br>0 results.";
    }
    $dbcon -> close();
?>











