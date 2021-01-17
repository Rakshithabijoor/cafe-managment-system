<?php
$username= filter_input(INPUT_POST,'user');
$password= filter_input(INPUT_POST,'email');
$confirmpassword=filter_input(INPUT_POST,'phone');


if(!empty($username)){
    if(!empty($password) && !empty($confirmpassword) ){
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
            $sql="INSERT INTO  account(name,email,phone)
            values('$username','$password','$confirmpassword')";
            if($conn->query($sql)){
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