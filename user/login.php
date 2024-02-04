<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login form in html</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>


    <div class="video container">
        <video autoplay muted loop id="background-video" >
            <source src="../image/v3.mp4" type="video/mp4">
        </video>

    </div>
    <div class="wrapper">
        <form action="connection.php" method="post">

            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
                <i class='bx bxs-lock'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                
            </div>

            <button type="submit" class="btn">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="sample.php">Register</a></p>
            </div>
        </form>
    </div>
</body>

</html>