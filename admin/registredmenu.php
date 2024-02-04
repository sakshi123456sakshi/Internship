 <?php
 include("registration1.php");
include("sidebar.php");
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(235, 228, 214);
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        form {
            position: relative;
            padding: 8px;
             /* border: 1px solid #04020b;  */
             background: #fff;
            /* box-shadow: 0 0 30px rgba(17, 16, 17, 0.933); */
            /* width: 70%; */
            margin-left: 32%;
            margin-top: 2%;
            margin-right: 3%;
            
        }
        
        h1 {
            font-size: 30px;
            color: black;
            font-weight: bold;
        }
        
        h2 {
            font-size: 15px;
            color: black;
            /* font-weight: bold; */
        }
        
        label {
            display: block;
            margin-bottom: 8px;
        }
        
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid black;
            border-radius: 4px;
            color:rgb(192, 185, 185);
        }
        
        select{
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid black;
            border-radius: 4px;
            color:rgb(192, 185, 185);
        }
        
      
        
        button {
            background-color: rgb(23, 202, 59);
            color: #fff;
            padding: 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #c812b0;
        }
        
        .row {
            display: flex;
        }
        .search-wrapper {
        /* border: 1px solid #f0f0f0; */
        border-radius: 8px; 
        height: 50px;
        
        /* display: flex; */
        align-items: left;
        overflow-x: hidden;
        margin-left: 75%;
        margin-right: 5%;
        margin-top: 5%;

    }
    
    .search-wrapper span {
        display:inline-block;
        padding: 0rem 1rem;
        font-size: 1.5rem;
    }
    .sidebar-menu {
        margin-top: 1rem;
    }
      
    .search-wrapper input {
        border: none;
        outline: none;
    }

    th,td{
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        .col-sm-8
        {
            align-items:center; 
            margin-left:33%;
             margin-right:3%; 
             margin-top:3%;
            position:relative;
            background-color: white;
            padding:1rem 1.5rem;
        }
        
    </style>
</head>

<body>
    <form action="registration1.php" method="post">
        <b>
                <h1><b>Register Menu</b></h1>
        <h2>
        <hr>
        <br>  
            <label for="CategoryName">Category Name:</label> 
            <select  id="catname" name="CategoryName" >
            <option value="" disabled selected >Select Category</option>
                <option value="Veg" >Veg</option>
                <option value="Non-Veg" >Non-Veg</option>
                <option value="Chinese" >Chinese</option>
                
            </select> 

            <label for="Menuname">Product Name</label>
            <input type="text" id="prodname" name="ProductName" required>

            <label for="price">Product Price</label>
            <input type="text" id="price" name="ProductPrice"  required>

        </h2>
        <button type="submit" >Save</button>
        </b>
    </form>

    <!-- <div class="search-wrapper">
        <span class="las la-search"></span>
        <input type="search" placeholder="Search here" />
    </div> -->
    <div class="container"> 
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div>
      <table class="table table-bordered">
       <thead><tr><th>S.N</th>
         <th>CategoryName</th>
         <th>ProductName</th>
         <th>ProductPrice</th>
         <th>PostingDate</th>
         <th>Action</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['CategoryName']??''; ?></td>
     <td><?php echo $data['ProductName']??''; ?></td>
     <td><?php echo $data['ProductPrice']??''; ?></td>
      <td><?php echo $data['PostingDate']??''; ?></td>
      <td><a href="update1.php?id=<?php echo $data["id"]; ?>">Update</a>
      <a href="delete1.php?id=<?php echo $data["id"]; ?>">Delete</a></td>    
       <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?> 
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
     
</body>

</html> 

