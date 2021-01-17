<?php
$username= filter_input(INPUT_POST,'coffee');
$password= filter_input(INPUT_POST,'items');



    
        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="cafe";
        //create connection
        $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
        if(mysqli_connect_error()){
            die('connect Error ('. mysqli_connect_errno().')'
            .mysqli_connect_error());
        }
        else{
            $sql="INSERT INTO  coffee(coffee,quantity)
            values('$username','$password')";
            if($conn->query($sql)){
                echo"New record is inserted Successfully";
                include 'order3.php';
            }
            else{
                echo"Error".$sql."
                ".$conn->error;
            }
            #$conn->close();
        }
        
    
   


?>