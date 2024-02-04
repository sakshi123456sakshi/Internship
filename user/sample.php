<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        
        form {
            /* background-color: rgb(240, 237, 236); */
            /* background: transparent; */
            background-image: url(..//image/bg3.png); 
            
            padding: 8px;
            border-radius: 9px;
            /* border: 1px solid #04020b; */
            box-shadow: 0 0 30px rgba(17, 16, 17, 0.933);
            width: 500px;
        }
        
        h1 {
            text-align: center;
            font-size: 30px;
            color: black;
            font-weight: bolder;
        }
        
        h2 {
            font-size: 15px;
            color: black;
            font-weight: bolder;
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
            border: 1px solid #2d0c20;
            border-radius: 4px;
        }
        
        .video-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }
        
        #background-video {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
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
        
        .column {
            margin-top: 0.1%;
            margin-right: 2%;
            margin-left: 2%;
            display: grid;
            position: relative;
            grid-template-rows: auto 1fr;
            border-radius: 15px;
            box-shadow: 0 0 20px hsla(0, 8%, 95%, 0.6);
            transition: 0.2s ease-in-out;
        }
    </style>
</head>

<body>
    <div class="video container">
        <video autoplay muted loop id="background-video">
            <source src="..//image/v4.mp4" type="video/mp4">
        </video>

    </div>

    <!-- <div class="row"> -->
    <!-- <div class="column"> -->
    <form action="regconn.php" method="post">
        <b>
                <h1><b>Registration Page</b></h1>
        <h2>
            <label for="Fisrt">First Name:</label>
            <input type="text" id="Firstname" name="fname" required>

            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lname" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="mobile no">phone Number:</label>
            <input type="tel" id="mobileno" name="mobno" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
        </h2>
        <button type="submit">Register</button>
        </b>
    </form>
    <!-- </div> -->
    <!-- </div> -->
    <!-- <div class="column">
        <marquee behavior="scroll" ,scrollamount="10" , direction="left">
            <img src="pizza1.jpg" ,height="200" ,width="200" , alt="">
            <img src="m1.jpg" ,height="200" ,width="200" , alt="">
            <img src="m2.jpg" ,height="200" ,width="200" , alt="">
            <img src="m3.jpg" ,height="200" ,width="200" , alt="">
            <img src="p1.jpg" ,height="200" ,width="200" , alt="">
            <img src="p2.jpg" ,height="200" ,width="200" , alt="">
            <img src="garlic.jpg" ,height="200" ,width="200" , alt="">
            <img src="italip1.jpg" ,height="200" ,width="200" , alt="">
            <img src="noodle1.jpg" ,height="200" ,width="200" , alt="">
            <img src="sand1.jpg" ,height="200" ,width="200" , alt="">
            <img src="sand2.jpg" ,height="200" ,width="200" , alt="">
            <img src="ff1.jpg" ,height="200" ,width="200" , alt="">
            <img src="ff2.jpg" ,height="200" ,width="200" , alt="">
            <img src="b1.jpg" ,height="200" ,width="200" , alt="">
            <img src="b2.jpg" ,height="200" ,width="200" , alt="">
            <img src="f1.jpg" ,height="200" ,width="200" , alt="">
            <img src="r1.jpg" ,height="200" ,width="200" , alt="">
            <img src="r2.jpg" ,height="200" ,width="200" , alt="">
        </marquee>
        <marquee behavior="slide" direction="left" scrollamount="10">
            <img src="pizza1.jpg" ,height="200" ,width="200" , alt="">
            <img src="m1.jpg" ,height="200" ,width="200" , alt="">
            <img src="m2.jpg" ,height="200" ,width="200" , alt="">
            <img src="m3.jpg" ,height="200" ,width="200" , alt="">
            <img src="p1.jpg" ,height="200" ,width="200" , alt="">
            <img src="p2.jpg" ,height="200" ,width="200" , alt="">
        </marquee>
    </div> -->
    <!-- </div> -->




</body>

</html>