<!--INSERT INTO `products` (`productid`, `p_name`, `p_description`, `price`, `s_username`) VALUES ('1', 'Red Printed TShirt', 'It\'s a Tshirt of the highest quality.', '20.00', 'pe_201');-->
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
    $sql = "select * from suppliers where s_username='$uname' and password='$pwd'";
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
        header("Location:selogin/selindex.php");
       echo "<h1><center> Login successful </center></h1>";
          
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    }      
    $con->close();
}

?>
<?php include('partials/menu.php');?>

<!------account-page------>
<div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img src="images/image1.png" width="100%">
                </div>
                <div class="col-3">
                        <h3>Enter the username and password you have recieved</h3>
                        <form method="POST" action="seller.php" id="LoginForm">
                            <input type="text" name="uname" placeholder="Username">
                            <input type="password" name="pwd" placeholder="Password">
                            <button type="submit" class="btn">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   

<?php include('partials/footer.php');?>