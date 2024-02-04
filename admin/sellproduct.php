<?php
include("sidebar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" type="text/css" href="assets2/css/isotope.css" media="screen">
  <link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen">
  <link rel="stylesheet" href="assets/css/style2.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="companyimages/head.png">
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
   <style>
   .main-panel { 
  -webkit-transition: width 0.25s ease, margin 0.25s ease;
  transition: width 0.25s ease, margin 0.25s ease;
  width: calc(100% - 260px);
  min-height: calc(100vh - 70px);
  display: -webkit-box;
  display: -ms-flexbox;
  display:flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
   flex-direction: column; } 
   table{
    margin-bottom: 5%;
   }
   @media (max-width: 991px) { 

      /* form{
        margin-left: 25%;
        margin-right: 3%;
        margin-top: 3%; 
     } */

    } 
    .main-panel {
      margin-left: 0;
       width: 100%; } 

.content-wrapper {
  background: #f2edf3;
  padding: 2.75rem 2.25rem;
  width: 100%;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1; }

   .row { 
   /* display: -webkit-box;   */
   display: -ms-flexbox; 
   /* display: flex;  */
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -20px;
   margin-left: -20px; } 

  .card {
    margin-left: 33%;
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.3125rem; }

  
  th { 
      white-space: normal !important;
      word-wrap: break-word;
      /* hyphens: auto; */
    } 

    td { 

      white-space: normal !important;
      word-wrap: break-word;
      /* hyphens: auto; */
      line-height: 20px !important;

    } 
  
    .se-pre-con { 
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url(images/loader-64x/Preloader_2.gif) center no-repeat #fff;
     } 
  


  </style> 
</head>
<body>
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="table-responsive p-3">
              <table id="datable_1" class="table table-hover w-100 display pb-30">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Product Name</th>
                    <th>Product Category</th>
                    <th>Pricing</th>
                    <th>Quantity</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                                           <form method="post" action="sell_product.php?action=add&amp;pid=9"></form>                                                  
                      <tr>
                        <td>1</td>
                        <td> <img src="productimages/po0.jpg" class="mr-2" alt="image">Pizza</td>
                        <td>Veg</td>
                        <td>100</td>
                        <td><input type="text" class="product-quantity" name="quantity" value="1" size="2"></td>
                        <td>
                          <input type="submit" value="Add to Cart" class="btnAddAction">
                        </td>
                      </tr>
                    
                                           <!-- <form method="post" action="sell_product.php?action=add&amp;pid=10"></form>                                                  
                      <tr>
                        <td>2</td>
                        <td> <img src="productimages/po5.jpg" class="mr-2" alt="image"> local eggs</td>
                        <td>Eggs</td>
                        <td>5000</td>
                        <td><input type="text" class="product-quantity" name="quantity" value="1" size="2"></td>
                        <td>
                          <input type="submit" value="Add to Cart" class="btnAddAction">
                        </td>
                      </tr>
                    
                                            <form method="post" action="sell_product.php?action=add&amp;pid=11"></form>                                                  
                      <tr>
                        <td>3</td>
                        <td> <img src="productimages/p2.jpg" class="mr-2" alt="image">fried chicken</td>
                        <td>Meat</td>
                        <td>15000</td>
                        <td><input type="text" class="product-quantity" name="quantity" value="1" size="2"></td>
                        <td>
                          <input type="submit" value="Add to Cart" class="btnAddAction">
                        </td>
                      </tr>
                    
                                            <form method="post" action="sell_product.php?action=add&amp;pid=12"></form>                                                  
                      <tr>
                        <td>4</td>
                        <td> <img src="productimages/kuroiler.jpg" class="mr-2" alt="image">kuroiler</td>
                        <td>Birds</td>
                        <td>8000</td>
                        <td><input type="text" class="product-quantity" name="quantity" value="1" size="2"></td>
                        <td>
                          <input type="submit" value="Add to Cart" class="btnAddAction">
                        </td>
                      </tr>
                    
                                            <form method="post" action="sell_product.php?action=add&amp;pid=13"></form>                                                  
                      <tr>
                        <td>5</td>
                        <td> <img src="productimages/bi.jpg" class="mr-2" alt="image">layers</td>
                        <td>Birds</td>
                        <td>6000</td>
                        <td><input type="text" class="product-quantity" name="quantity" value="1" size="2"></td>
                        <td>
                          <input type="submit" value="Add to Cart" class="btnAddAction">
                        </td>
                      </tr>
                    
                                            <form method="post" action="sell_product.php?action=add&amp;pid=14"></form>                                                  
                      <tr>
                        <td>6</td>
                        <td> <img src="productimages/bi6.jpg" class="mr-2" alt="image">boilers</td>
                        <td>Birds</td>
                        <td>9000</td>
                        <td><input type="text" class="product-quantity" name="quantity" value="1" size="2"></td>
                        <td>
                          <input type="submit" value="Add to Cart" class="btnAddAction">
                        </td>
                      </tr>
                    
                                            <form method="post" action="sell_product.php?action=add&amp;pid=15"></form>                                                  
                      <tr>
                        <td>7</td>
                        <td> <img src="productimages/chick.jpg" class="mr-2" alt="image">young chick</td>
                        <td>Chick</td>
                        <td>1000</td>
                        <td><input type="text" class="product-quantity" name="quantity" value="1" size="2"></td>
                        <td>
                          <input type="submit" value="Add to Cart" class="btnAddAction">
                        </td>
                      </tr> -->
                    
                    
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="table-responsive p-3">
              <form class="needs-validation" method="post" novalidate="">
               <h4>Shopping Cart</h4>
               <hr>

               <a id="btnEmpty" href="sell_product.php?action=empty">Empty Cart</a>
                 
                <table class="table align-items-center table-bordered">
                  <tbody>
                    <tr>
                      <th>Product Name</th>
                      <th>Category</th>
                      <th>Company</th>
                      <th>Quantity</th>
                      <th>Unit Price</th>
                      <th>Price</th>
                      <th>Remove</th>
                    </tr>   
                                              <input type="hidden" value="3" name="quantity[10]">
                      <tr>
                        <td><img src="productimages/po5.jpg" class="mr-2" alt="image"> Pizza</td>
                        <td>Pizza</td>
                        <td></td>
                        <td>3</td>
                        <td>100</td>
                        <td>300.00</td>
                        <td><a href="sell_product.php?action=remove&amp;code=10" class="btnRemoveAction"> <i class="mdi mdi-close-circle" style="font-size: 25px;"></i> </a></td>
                      </tr>
                      
                    <tr>
                      <td colspan="3" align="right">Total:</td>
                      <td colspan="2">3</td>
                      <td colspan=""><strong>300.00</strong></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table> 
                <div class="form-row">
                  <div class="col-md-6 mb-10">
                    <label for="validationCustom03">Customer Name</label>
                    <input type="text" class="form-control" id="validationCustom03" placeholder="Customer Name" name="customername" required="">
                    <div class="invalid-feedback">Please provide a valid customer name.</div>
                  </div>
                  <div class="col-md-6 mb-10">
                    <label for="validationCustom03">Customer Mobile Number</label>
                    <input type="text" class="form-control" id="validationCustom03" placeholder="Mobile Number" name="mobileno" required="">
                    <div class="invalid-feedback">Please provide a valid mobile number.</div>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-6 mb-10">
                    <label for="validationCustom03">Payment Mode</label>
                    <div class="custom-control custom-radio mb-10">
                      <input type="radio" class="custom-control-input" id="customControlValidation2" name="paymentmode" value="cash" required="">
                      <label class="custom-control-label" for="customControlValidation2">Cash</label>
                    </div>
                    <div class="custom-control custom-radio mb-10">
                      <input type="radio" class="custom-control-input" id="customControlValidation3" name="paymentmode" value="card" required="">
                      <label class="custom-control-label" for="customControlValidation3">Card</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4 ">
                    <button class="btn btn-primary mt-6" type="submit" name="checkout">Checkout</button>
                  </div>
                </div>
              </form>
              
          </div>
        </div>
      </div>
    </div>
  </div>
</div>    
</div>
</body>
</html>