<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;600;700&display=swap" rel="stylesheet">
    <lik rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
        <script src="https://kit.fontawesome.com/c99cba4417.js" crossorigin="anonymous"></script>
</head>

<body class="">
    <nav class="nav-links">
        <ul>
            <li>
                <a href="Homepage.php"><b>Home</b></a>
            </li>
            <li>
                <a href="aboutus.php"><b>About Us</b></a>
            </li>
            <li>
                <a href="menu.php"><b>Menu</b></a>
            </li>
            <li>
                <a href="add.php"><b>Cart</b></a>
            </li>
            <li>
                <a href="payment.php"><b>Payment</b></a>
            </li>
            <li>
                <a href="review.php"><b>Review</b></a>
            </li>
            <li>
                <a href="index.php"><b>Contact Us</b></a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <header>
            <h1 style="color:palevioletred">Shopping Cart</h1>
            <div class="shopping">
                <img src="..//image/s.jpg">
                <span class="quantity">0</span>
            </div>
        </header>

        <div class="list">

        </div>
    </div>
    <div class="card">
        <h1>Card</h1>
        <ul class="listCard">
        </ul>
        <div class="checkOut">
            <div class="total">0</div>
            <div class="closeShopping">Close</div>
            <div class="Order Now"><a href="payment.php"> Order Now</a></div>
        </div>
    </div>

    <script src="app.js"></script>
    <div class="contact-footer">
        <h3>Follow Us</h3>
        <div class="social-links">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-youtube"></a>
        </div>
    </div>
</body>

</html>