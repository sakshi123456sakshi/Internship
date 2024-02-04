
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
            margin-left: 25%;
            margin-top: 10%;
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
            width: 71%;
            border-collapse: collapse;
            margin: 20px;
            margin-left: 25%;
            margin-top: 3%;
            background-color: #fff;
        }
        th,td{
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        
    </style>
</head>

<body>
    <h1>Customers</h1>
    <!-- <form action="">
        <b>
                <h1><b>Generate Invoice</b></h1>
        <h2>
        <hr>
        <br>  
            <label for="CategoryName">Category Name:</label> 
            <select name="Select Catagory" id="" >
                <option value="" disabled selected>Select Category</option>
                <option value="option1">Veg</option>
                <option value="option2">Non-Veg</option>
                <option value="option3">Chinese</option>
                
            </select>

            <label for="Menuname">Menu Name</label>
            <input type="text" id="productname" name="ProductName" value="Enter Product" required>

            <label for="price">Menu Name</label>
            <input type="text" id="price" name="ProductPrice" value="Enter Price" required>

        </h2>
        <button type="submit">Save</button>
        </b>
    </form> -->

    <div class="search-wrapper">
        <span class="las la-search"></span>
        <input type="search" placeholder="Search here" />
    </div>
    <table class="tbl-full">
        <tr>
            <th>No</th>
            <th>Customer Name</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th style="width: 15%;">Actions</th>
        </tr>
        
    </table>

</body>

</html>