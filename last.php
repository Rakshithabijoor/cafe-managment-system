<?php
$name= filter_input(INPUT_POST,'name');
$option= filter_input(INPUT_POST,'option');
$number= filter_input(INPUT_POST,'number');



    
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
            $sql="INSERT INTO  payment(name,payment_mode,number)
            values('$name','$option','$number')";
            if($conn->query($sql)){
                echo"Payment successfull";
                include "user1.html";

              
            }
            else{
                echo"Error".$sql."
                ".$conn->error;
            }
            $conn->close();
        }
        