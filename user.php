<?php
$username= filter_input(INPUT_POST,'user');
$password= filter_input(INPUT_POST,'passcode');
$confirmpassword=filter_input(INPUT_POST,'cpass');
$email= filter_input(INPUT_POST,'email');
$phone= filter_input(INPUT_POST,'phone');
if(!empty($username)){
    if(!empty($password) && ($password)==($confirmpassword)){
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
            $sql="INSERT INTO  register(name,password,email,phone)
            values('$username','$password','$email','$phone')";
            if($conn->query($sql)){
                echo"New record is inserted Successfully";
                include 'user1.html';
                
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