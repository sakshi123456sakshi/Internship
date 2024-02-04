<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="review.css">
    <title>Review form</title>
</head>

<body>

    <div class="wrapper">
        <h3>Aroma cafe</h3>
        <form name="submit-to-google-sheet" >
            <div class="rating">
                <input type="number" name="rating" hidden>
                <i class='bx bx-star star' style="--i: 0"></i>
                <i class='bx bx-star star' style="--i: 1"></i>
                <i class='bx bx-star star' style="--i: 2"></i>
                <i class='bx bx-star star' style="--i: 3"></i>
                <i class='bx bx-star star' style="--i: 4"></i>
            </div>
            <textarea name="opinion" cols="30"  rows="5" placeholder="Your opinion..."></textarea>
            <div class="btn-group">
                <button type="submit" class="send-btn" >submit</button>
                <button class="btn cancel"><a href="Homepage.php">Go to Homepage</a></button>
            </div>

        </form>
    </div>
    <script src="script.js"></script>


    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbyMi3qgj7QPzfQGwHdnIpdP_TY4afsOGg1ZC2-b6lh401oKEyeuaQ-U8OUBbz83kMluSA/exec'
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