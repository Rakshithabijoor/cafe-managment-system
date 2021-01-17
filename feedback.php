<?php
$username= filter_input(INPUT_POST,'taste');
$password= filter_input(INPUT_POST,'quality');
$confirmpassword=filter_input(INPUT_POST,'quantity');
$email= filter_input(INPUT_POST,'overall');

if(!empty($username)){
    if(!empty($password) && !empty($password) ){
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
            $sql="INSERT INTO  feedback(taste,quality,quantity,overall)
            values('$username','$password','$confirmpassword','$email')";
            if($conn->query($sql)){
                include "user1.html";
            }
            else{
                echo"Error".$sql."
                ".$conn->error;
            }
            $conn->close();
        }
        }
else{
    echo"Password is incorrect";
    die();
}
    }
    else{
        echo"Username should not be empty";
        die();
    }


?>