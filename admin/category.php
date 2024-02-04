<?php
include("category1.php");
include("sidebar.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

            padding: 8px;
             /* border: 1px solid #04020b;  */
             background: #fff;
            /* box-shadow: 0 0 30px rgba(17, 16, 17, 0.933); */
             width:60%; 
            margin-left: 35%;
            margin-top: 3%; 
            margin-right:20%
            position:fixed;
            
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
            border: 1px solid rgb(176, 170, 170);
            border-radius: 4px;
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
         .column{
            display: flex;
            align-items:left;
             margin-left:32%; 
             margin-top:5%;

        } 
        /* .search-wrapper {
        /* border: 1px solid #f0f0f0; 
        border-radius: 8px; 
        height: 50px;
        
        display: flex;
        align-items:left;
        overflow-x: hidden;
         margin-left: 30%; 
          margin-right: 5%;  
        margin-top: 5%;

    } */
    
    /* .search-wrapper span {
        display:inline-block;
        padding: 0rem 1rem;
         font-size: 1.5rem; 
    }
    /* .sidebar-menu {
        margin-top: 1rem;
    }
       
    .search-wrapper input {
        border: none;
        outline: none;
    }*/
        table{
             width: 71%; 
            border-collapse: collapse;
            margin: 20px;
            margin-left: 25%;
            margin-top: 3%;
            background-color: #fff;
        }
        th,td{
             border: 1px solid rgb(176, 170, 170); 
            padding: 8px; 
            text-align: center;
        }
        .col-sm-8
        {
            align-items:center;
            margin-left:18%;
            margin-right:20%;
            position:relative;
        }
        .main-content {
        transition: margin-left 300ms;
        margin-left: 345px;
    }
    
    header {
        background: #fff;
        display: flex;
        justify-content: space-between;
        padding: 1rem 1.5rem;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        /* position: fixed; */
        /* left: 345px; */
        width: calc(100%-345px);
        top: 0;
        z-index: 100;
        transition: left 300ms;
    }
        
    </style>
</head>

<body>

    </div>

    <form action="category1.php" method="post">
        <b>
                <h1><b>Category</b></h1>
        <h2>
        <hr>
        <br>  
        
            <label for="CategoryName">Category Name:</label>
            <input type="text" id="CategoryName" name="CategoryName"  required>

            <label for="CategoryCode">Category Code</label>
            <input type="text" id="CategoryCode" name="CategoryCode"  required>
        </h2>
        <button type="submit">Save</button>
        </b>
    </form>
    <!-- <div class="row">
        <div class="column">
            
            <label>Show
                <select name="dataTableHover_length" aria-controls="dataTableHover" class="custom-select custom-select-sm form-control form-control-sm">
                <option value="10">10</option><option value="25">25</option>
                <option value="50">50</option><option value="100">100</option>
            </select> 
            entries
            </label>
        </div>
        <div class="column">
        <div class="search-wrapper">
            <span class="las la-search"></span>
            <input type="search" placeholder="Search here" />
        </div>
        </div>
    </div> -->
 <div class="container"> 
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div>
      <table class="table table-bordered">
       <thead><tr><th>S.N</th>
         <th>CategoryName</th>
         <th>CategoryCode</th>
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
     <td><?php echo $data['CategoryCode']??''; ?></td>
      <td><?php echo $data['PostingDate']??''; ?></td>
      <td><a href="update.php?id=<?php echo $data["id"]; ?>">Update </a>
      <a href="delete.php?id=<?php echo $data["id"]; ?>"> Delete </a>
      </td>    
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