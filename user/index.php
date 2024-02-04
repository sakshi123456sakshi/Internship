<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style5.css">
    <!-- Fontawesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>

<body>

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

    <section class="contact-section">
        <div class="contact-bg">
            <h3>Get in Touch with Us</h3>
            <h2>contact us</h2>
            <div class="line">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <p class="text">"Connecting with care Your satisfaction delivered, just a message away!"</p>
        </div>


        <div class="contact-body">
            <div class="contact-info">
                <div>
                    <span><i class = "fas fa-mobile-alt"></i></span>
                    <span>Phone No.</span>
                    <span class="text">1-2392-23928-2</span>
                </div>
                <div>
                    <span><i class = "fas fa-envelope-open"></i></span>
                    <span>E-mail</span>
                    <span class="text">mail@company.com</span>
                </div>
                <div>
                    <span><i class = "fas fa-map-marker-alt"></i></span>
                    <span>Address</span>
                    <span class="text">Navin nagar road,saiAanand Apartment,Sangamner</span>
                </div>
                <div>
                    <span><i class = "fas fa-clock"></i></span>
                    <span>Opening Hours</span>
                    <span class="text">Monday - Friday (9:00 AM to 5:00 PM)</span>
                </div>
            </div>

            <div class="contact-form">
                <form name="submit-to-google-sheet">
                    <div>
                        <input type="text" name="Fname" class="form-control" placeholder="First Name">
                        <input type="text" name="Lname"  class="form-control" placeholder="Last Name">
                    </div>
                    <div>
                        <input type="email" name="email"  class="form-control" placeholder="E-mail">
                        <input type="text" name="Pno" class="form-control" placeholder="Phone">
                    </div>
                    <textarea rows="5"  name="Msg" placeholder="Message" class="form-control"></textarea>
                    <button type="submit" class="send-btn" >submit</button>
                </form>

                <div>
                    <img src="..//image/contact-png.png" alt="">
                </div>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7516.4557634228795!2d74.17724769117405!3d19.6175529829181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd0070e7eb3683%3A0x812069ad0d4f7f8f!2sAmrutvahini%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1703570759429!5m2!1sen!2sin"
                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

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
    </section>
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbyx320fpaUgdgyfN_KWGRP-k_WrGret2YeO_MidorIpsbiLq6JNR6_DN138H0y3QwXq/exec'
        const form = document.forms['submit-to-google-sheet']
      
        form.addEventListener('submit', e => {
          e.preventDefault()
          fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => console.log('Success!', response))
            .catch(error => console.error('Error!', error.message))
        })
      </script>


</body>

</html>