<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Payment gateway form design in Hindi</title>
    <link rel="stylesheet" type="text/css" href="payment.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="left">
                <h3>BILLING ADDRESS</h3>
                <form name="billing-form" id="billing-form">
                    Full name
                    <input type="text" name="name" placeholder="Enter name"> Email
                    <input type="text" name="email" placeholder="Enter email"> Address
                    <input type="text" name="add" placeholder="Enter address"> City
                    <input type="text" name="city" placeholder="Enter City">
                    <div class="zip">
                        <label>
                            State
                            <select name="state">
                                <option>Choose State..</option>
                                <option>Rajasthan</option>
                                <option>Haryana</option>
                                <option>Uttar Pradesh</option>
                                <option>Madhya Pradesh</option>
                                <option>Maharashtra</option>
                            </select>
                        </label>
                        <label>
                            Zip code
                            <input type="number" name="zipc" placeholder="Zip code">
                        </label>
                    </div>
                </form>
            </div>
            <div class="right">
                <h3>PAYMENT</h3>
                <form name="payment-form" id="payment-form">
                    Accepted Card <br>
                    <img src="..//image/card1.png" width="100">
                    <img src="..//image/card2.png" width="50">
                    <br><br> Credit card number
                    <input type="text" name="credit" placeholder="Enter card number"> Exp month
                    <input type="text" name="month" placeholder="Enter Month">
                    <div class="zip">
                        <label>
                            Exp year
                            <select name="expYear">
                                <option>Choose Year..</option>
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                            </select>
                        </label>
                        <label>
                            CVV
                            <input type="number" name="cvv" placeholder="CVV">
                        </label>
                    </div>
                </form>
                <button type="submit" class="send-btn"   onclick="submitForm() "  >Submit</button>
                <a href="pop.php"><input type="button" value="Proceed to Checkout"></a>
            </div>
        </div>
    </header>

    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbx4fY4oKUjZJLAqsUeRbPHRVZpK_Phnv5eAQNfnIQ0crMLcff6TudiVDixeojnufzkY/exec';

        function submitForm() {
            const billingForm = document.getElementById('billing-form');
            const paymentForm = document.getElementById('payment-form');

            const formData = new FormData(billingForm);
            for (const [key, value] of new FormData(paymentForm)) {
                formData.append(key, value);
            }

            fetch(scriptURL, { method: 'POST', body: formData })
                .then(response => console.log('Success!', response))
                .catch(error => console.error('Error!', error.message));
        }
    </script>

</body>

</html>
