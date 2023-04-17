
<!--INSERT INTO `products` (`productid`, `p_name`, `p_description`, `price`, `s_username`) VALUES (NULL, 'Navy Blue printed T shirt', 'high quality navy blue T shirt', '20', 'o_207');-->
<?php
$insert=false;
if(isset($_POST["pname"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $pname = $_POST['pname'];
  $pdesc = $_POST['pdesc'];
  $price = $_POST['price'];
  $susname=$_POST['susname'];
  $sql="INSERT INTO `redstore`.`products` (`productid`,`p_name`, `p_description`,`price`,`s_username`) VALUES (NULL,'$pname', '$pdesc','$price','$susname');";
  if($pname!=NULL)
  {
  if($con->query($sql) == true){
    echo "Successfully entered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
}
else{
    echo"Enter the required details";
}
// Close the database connection
$con->close();
}
?>

<?php include('selmenu.php');?>

<div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="/J-component/images/image1.png" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="register()">Sell</span>
                           
                        </div>                        
                         <form method="POST" action="sell.php" id="RegForm">
                            <input type="text" name="pname" id="pname" placeholder="Product name">
                            <input type="text" name="pdesc" id="pdesc" placeholder="Product description">
                            <input type="number" name="price" id="price" placeholder="price">
                            <input type="text" name="susname" id="susname" placeholder="username"> 
                            <button type="submit" class="btn">Enter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   





<?php include('selfooter.php');?>