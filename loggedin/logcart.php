
<?php

$insert=false;
if(isset($_POST["shirt1"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname'];
  $shirt1 = $_POST['shirt1'];
  $type=$_POST['stype'];
  $price=20*$shirt1;
  $pid=1;
  $sql="INSERT INTO `redstore`.`orders` (`orderid`,`username`,`productid`,`T_price`,`paymenttype`,`quantity`,`orderdate`) VALUES (NULL, '$usname','$pid','$price','$type','$shirt1',current_timestamp());";
  if($con->query($sql)== true){
    echo "Successfully ordered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>

<?php

$insert=false;
if(isset($_POST["bshoes"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname1'];
  $bshoes = $_POST['bshoes'];
  $type=$_POST['stype1'];
  $price=10*$bshoes;
  $pid=2;
  $sql="INSERT INTO `redstore`.`orders` (`orderid`,`username`,`productid`,`T_price`,`paymenttype`,`quantity`,`orderdate`) VALUES (NULL, '$usname','$pid','$price','$type','$bshoes',current_timestamp());";
  if($con->query($sql)== true){
    echo "Successfully ordered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>


<?php

$insert=false;
if(isset($_POST["tpant"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname2'];
  $tpant = $_POST['tpant'];
  $type=$_POST['stype2'];
  $price=25*$tpant;
  $pid=3;
  $sql="INSERT INTO `redstore`.`orders` (`orderid`,`username`,`productid`,`T_price`,`paymenttype`,`quantity`,`orderdate`) VALUES (NULL, '$usname','$pid','$price','$type','$tpant',current_timestamp());";
  if($con->query($sql)== true){
    echo "Successfully ordered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>


<?php

$insert=false;
if(isset($_POST["bshirt"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname3'];
  $bshirt = $_POST['bshirt'];
  $type=$_POST['stype3'];
  $price=20*$bshirt;
  $pid=4;
  $sql="INSERT INTO `redstore`.`orders` (`orderid`,`username`,`productid`,`T_price`,`paymenttype`,`quantity`,`orderdate`) VALUES (NULL, '$usname','$pid','$price','$type','$bshirt',current_timestamp());";
  if($con->query($sql)== true){
    echo "Successfully ordered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>

<?php

$insert=false;
if(isset($_POST["gshoes"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname4'];
  $gshoes = $_POST['gshoes'];
  $type=$_POST['stype4'];
  $price=15*$gshoes;
  $pid=5;
  $sql="INSERT INTO `redstore`.`orders` (`orderid`,`username`,`productid`,`T_price`,`paymenttype`,`quantity`,`orderdate`) VALUES (NULL, '$usname','$pid','$price','$type','$gshoes',current_timestamp());";
  if($con->query($sql)== true){
    echo "Successfully ordered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>

<?php

$insert=false;
if(isset($_POST["blshirt"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname5'];
  $blshirt = $_POST['blshirt'];
  $type=$_POST['stype5'];
  $price=25*$blshirt;
  $pid=6;
  $sql="INSERT INTO `redstore`.`orders` (`orderid`,`username`,`productid`,`T_price`,`paymenttype`,`quantity`,`orderdate`) VALUES (NULL, '$usname','$pid','$price','$type','$blshirt',current_timestamp());";
  if($con->query($sql)== true){
    echo "Successfully ordered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>

<?php

$insert=false;
if(isset($_POST["socks"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname6'];
  $socks = $_POST['socks'];
  $type=$_POST['stype6'];
  $price=5*$socks;
  $pid=7;
  $sql="INSERT INTO `redstore`.`orders` (`orderid`,`username`,`productid`,`T_price`,`paymenttype`,`quantity`,`orderdate`) VALUES (NULL, '$usname','$pid','$price','$type','$socks',current_timestamp());";
  if($con->query($sql)== true){
    echo "Successfully ordered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>

<?php

$insert=false;
if(isset($_POST["watch"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname7'];
  $watch = $_POST['watch'];
  $type=$_POST['stype7'];
  $price=15*$watch;
  $pid=8;
  $sql="INSERT INTO `redstore`.`orders` (`orderid`,`username`,`productid`,`T_price`,`paymenttype`,`quantity`,`orderdate`) VALUES (NULL, '$usname','$pid','$price','$type','$watch',current_timestamp());";
  if($con->query($sql)== true){
    echo "Successfully ordered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>

<?php

$insert=false;
if(isset($_POST["bspshoes"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname8'];
  $bspshoes = $_POST['bspshoes'];
  $type=$_POST['stype8'];
  $price=10*$bspshoes;
  $pid=9;
  $sql="INSERT INTO `redstore`.`orders` (`orderid`,`username`,`productid`,`T_price`,`paymenttype`,`quantity`,`orderdate`) VALUES (NULL, '$usname','$pid','$price','$type','$bspshoes',current_timestamp());";
  if($con->query($sql)== true){
    echo "Successfully ordered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>

<?php

$insert=false;
if(isset($_POST["gcshoes"])){
  $server = "localhost";
  $username = "root";
  $password = "";
  //connecting
  $con = mysqli_connect($server, $username, $password);
  if(!$con){
      die("connection failed due to".mysqli_connect_error());
  }
  $usname=$_POST['usname9'];
  $gcshoes = $_POST['gcshoes'];
  $type=$_POST['stype9'];
  $price=25*$gcshoes;
  $pid=10;
  $sql="INSERT INTO `redstore`.`orders` (`orderid`,`username`,`productid`,`T_price`,`paymenttype`,`quantity`,`orderdate`) VALUES (NULL, '$usname','$pid','$price','$type','$gcshoes',current_timestamp());";
  if($con->query($sql)== true){
    echo "Successfully ordered";
    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
  
}
?>

<?php include('logmenu.php');?>
   
 <!----cart items details----->
 <div class="small-container cart-page">
         <table>
             <tr>
                 <th>Products</th>
                 <th>Quantity</th>
                 <th>Price</th>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/buy-1.jpg">
                         <div>
                         <form method="POST" action="logcart.php" id="RegForm">
                             <p>Red Printed TShirt</p>
                             <small>Price: $20.00</small>
                             <input type="text" name="stype" value="Enter payment type(credit or debit)">
                             <input type="text" name="usname" value="Enter username for confirmation">
                             <button type="submit" class="btn">Order</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="number" name="shirt1"></td>
                 <td>$20.00</td>
                 </form>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/buy-2.jpg">
                         <div>
                         <form method="POST" action="logcart.php" id="OrderForm">
                             <p>Black Shoes</p>
                             <small>Price: $10.00</small>
                             <input type="text" name="stype1" value="Enter payment type(credit or debit)">
                             <input type="text" name="usname1" value="Enter username for confirmation">
                             <button type="submit" class="btn">Order</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="number" name="bshoes"></td>
                 <td>$10.00</td>
                 </form>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/buy-3.jpg">
                         <div>
                         <form method="POST" action="logcart.php" id="OrderForm">
                             <p>Full track pant</p>
                             <small>Price: $25.00</small>
                             <input type="text" name="stype2" value="Enter payment type(credit or debit)">
                             <input type="text" name="usname2" value="Enter username for confirmation">
                             <button type="submit" class="btn">Order</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="number" name="tpant"></td>
                 <td>$25.00</td>
                 </form>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/product-4.jpg">
                         <div>
                         <form method="POST" action="logcart.php" id="OrderForm">
                             <p>Navy blue Printed TShirt</p>
                             <small>Price: $20.00</small>
                             <input type="text" name="stype3" value="Enter payment type(credit or debit)">
                             <input type="text" name="usname3" value="Enter username for confirmation">
                             <button type="submit" class="btn">Order</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="number" name="bshirt"></td>
                 <td>$20.00</td>
                 </form>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/product-5.jpg">
                         <div>
                         <form method="POST" action="logcart.php" id="OrderForm">
                             <p>Grey Shoes</p>
                             <small>Price: $15.00</small>
                             <input type="text" name="stype4" value="Enter payment type(credit or debit)">
                             <input type="text" name="usname4" value="Enter username for confirmation">
                             <button type="submit" class="btn">Order</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="number" name="gshoes"></td>
                 <td>$15.00</td>
                 </form>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/product-6.jpg">
                         <div>
                         <form method="POST" action="logcart.php" id="OrderForm">
                             <p>Black Shirt</p>
                             <small>Price: $25.00</small>
                             <input type="text" name="stype5" value="Enter payment type(credit or debit)">
                             <input type="text" name="usname5" value="Enter username for confirmation">
                             <button type="submit" class="btn">Order</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="number" name="blshirt"></td>
                 <td>$25.00</td>
                 </form>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/product-7.jpg">
                         <div>
                         <form method="POST" action="logcart.php" id="OrderForm">
                             <p>Socks</p>
                             <small>Price: $5.00</small>
                             <input type="text" name="stype6" value="Enter payment type(credit or debit)">
                             <input type="text" name="usname6" value="Enter username for confirmation">
                             <button type="submit" class="btn">Order</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="number" name="socks"></td>
                 <td>$5.00</td>
                 </form>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/product-9.jpg">
                         <div>
                         <form method="POST" action="logcart.php" id="OrderForm">
                             <p>Sports Watch</p>
                             <small>Price: $15.00</small>
                             <input type="text" name="stype7" value="Enter payment type(credit or debit)">
                             <input type="text" name="usname7" value="Enter username for confirmation">
                             <button type="submit" class="btn">Order</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="number" name="watch"></td>
                 <td>$15.00</td>
                 </form>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/product-10.jpg">
                         <div>
                         <form method="POST" action="logcart.php" id="OrderForm">
                             <p>Black Sports Shoes</p>
                             <small>Price: $10.00</small>
                             <input type="text" name="stype8" value="Enter payment type(credit or debit)">
                             <input type="text" name="usname8" value="Enter username for confirmation">
                             <button type="submit" class="btn">Order</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="number" name="bspshoes"></td>
                 <td>$10.00</td>
                 </form>
             </tr>
             <tr>
                 <td>
                     <div class="cart-info">
                         <img src="images/product-11.jpg">
                         <div>
                         <form method="POST" action="logcart.php" id="OrderForm">
                             <p>Grey casual shoes</p>
                             <small>Price: $25.00</small>
                             <input type="text" name="stype9" value="Enter payment type(credit or debit)">
                             <input type="text" name="usname9" value="Enter username for confirmation">
                             <button type="submit" class="btn">Order</button>
                             <br>
                         </div>
                     </div>
                 </td>
                 <td><input type="number" name="gcshoes"></td>
                 <td>$25.00</td>
                 </form>
             </tr>
         </table>
         
         
         
     </div>
      
    
     <?php include('logfooter.php');?>