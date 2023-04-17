<?php

if(isset($_POST["uname"])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $db="redstore";
    //connecting
    $con = mysqli_connect($server, $username, $password,$db);
    if(!$con){
        die("connection failed due to".mysqli_connect_error());
    }
    
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];
    $uname = stripcslashes($uname);  
    $pwd = stripcslashes($pwd);  
    $uname = mysqli_real_escape_string($con, $uname);  
    $pwd = mysqli_real_escape_string($con, $pwd); 
    
    
    $sql = "select * from customers where username='$uname' and password='$pwd'";
    if($con->query($sql) == true){
        //echo "Successfully connected";
        // Flag for successful insertion
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count == 1){  
        
        header("Location:loggedin/logindex.php");
        echo "<h1><center> Login successful </center></h1>";  
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    }      
    $con->close();
}

?>