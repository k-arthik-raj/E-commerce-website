<?php include('partials/menu.php');?>
   
   <!----- Single product details ----->
   
   <div class="small-container single-product">
       <div class="row">
           <div class="col-2">
               <img src="images/gallery-1.jpg" width="100%" id="ProductImg">
               
               <div class="small-img-row">
                   <div class="scall-img-col">
                       <img src="images/gallery-1.jpg" width="100%" class="small-img">
                   </div>
                   <div class="scall-img-col">
                       <img src="images/gallery-2.jpg" width="100%" class="small-img">
                   </div>
                   <div class="scall-img-col">
                       <img src="images/gallery-3.jpg" width="100%" class="small-img">
                   </div>
                   <div class="scall-img-col">
                       <img src="images/gallery-4.jpg" width="100%" class="small-img">
                   </div>
                   
               </div>
               
               
               
           </div>
           <div class="col-2">
               <p>Home / T-Shirt</p>
               <h1>Red Printed T-Shirt</h1>
               <h4>$50.00</h4>
               <select>
                   <option>Select Size</option>
                   <option>XXL</option>
                   <option>XL</option>
                   <option>Large</option>
                   <option>Medium</option>
                   <option>Small</option>
               </select>
               <input type="number" value="1">
               <a href="account.php" class="btn">Order</a>
               <h3>Product Details</h3>
               <p>This dress is amazing just buy it and you wont regret it.. It's comfort is unmatchable</p>
           </div>
       </div>
   </div>
 
 <!--- Title--->
   <div class="small-container">
       <div class="row row-2">
           <h2>Related Products</h2>
           <p>View More</p>
       </div>
   </div>
   
   
<!-----products---->
   <div class="small-container">
       <div class="row">
           <div class="col-4">
               <img src="images/product-5.jpg">
               <h4>Red Printed T-Shirt</h4>
               <div class="rating">
               <!---<i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star-o" aria-hidden="true"></i>  --->               
               </div>
               <p>$50.00</p>
           </div>
           <div class="col-4">
               <img src="images/product-6.jpg">
               <h4>Shoes</h4>
               <div class="rating">
               <!---<i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star-o" aria-hidden="true"></i>  --->               
               </div>
               <p>$50.00</p>
           </div>
           <div class="col-4">
               <img src="images/product-7.jpg">
               <h4>Full track pants</h4>
               <div class="rating">
               <!---<i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star-o" aria-hidden="true"></i>  --->               
               </div>
               <p>$50.00</p>
           </div>
           <div class="col-4">
               <img src="images/product-8.jpg">
               <h4>Blue Printed T-Shirt</h4>
               <div class="rating">
               <!---<i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star" aria-hidden="true"></i>
               <i class="fa fa-star-o" aria-hidden="true"></i>  --->               
               </div>
               <p>$50.00</p>
           </div>
       </div>
       
   </div>
 <!----js for product gallery----->
<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");
    SmallImg[0].onclick = function(){
        ProductImg.src = SmallImg[0].src;
    }
    SmallImg[1].onclick = function(){
        ProductImg.src = SmallImg[1].src;
    }
    SmallImg[2].onclick = function(){
        ProductImg.src = SmallImg[2].src;
    }
    SmallImg[3].onclick = function(){
        ProductImg.src = SmallImg[3].src;
    }
    
    </script>     
 <?php include('partials/footer.php');?>