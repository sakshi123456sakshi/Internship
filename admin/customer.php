<?php
include("customer1.php");
include("sidebar.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
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
        
        /* form {

            padding: 8px;
            border: 1px solid #04020b;  
             background: #fff;
            box-shadow: 0 0 30px rgba(17, 16, 17, 0.933); 
            width: 70%;
            margin-left: 25%;
            margin-top: 10%;
            
        } */
        
        h1 {
            font-size: 25px;
            color: black;
            font-weight: bold;
            align-items: left;
            margin-left: 33%;
             margin-top: 2%; 
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
            border: 1px solid rgb(192, 185, 185);
            border-radius: 4px;
            color:rgb(192, 185, 185);
        }
        
        select{
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid rgb(192, 185, 185);
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
        /* margin-top: 5%; */

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
        table{
            /* width: 7%; */
            border-collapse: collapse;
            margin: 20px;
            margin-left: 33%;
            margin-top: 3%;
            background-color: #fff;
            /* padding: 1.5rem 1.5; */
        }
        th,td{
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        .col-sm-8
        {
            align-items:center;
            width: 100%;
            border-color: gray;
            margin-left:20%;
            margin-right:5%;
            position:relative;
            padding:1rem 1.5rem; 
            background-color:white;
            background-size:5%;
        }
        
    </style>
</head>

<body>
    <h1>Customers</h1>

    <div class="search-wrapper">
        <span class="las la-search"></span>
        <input type="search" placeholder="Search here" />
    </div>
    <div class="container"> 
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div>
      <table class="table table-bordered">
       <thead><tr><th>S.N</th>
         <th>Customer Name</th>
         <th>Mobile Number</th>
         <th>Address</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['fname']??''; ?></td>
     <td><?php echo $data['mobno']??''; ?></td>
      <td><?php echo $data['address']??''; ?></td>
      <!-- <td><a href="up.php?id=<?php echo $data["cid"]; ?>">Update</a></td>     -->
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
   