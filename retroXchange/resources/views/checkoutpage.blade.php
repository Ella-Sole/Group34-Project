<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width. initial-scale = 1.0">
        <title>Checkout</title>
        <link rel="stylesheet" href="{{asset('/style.css')}}"> <!-- Link to CSS File-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    
    </head>

    <body class = "body-form">
        <x-header-navbar> </x-header-navbar>
    <!-- Main Content-->
    <main>
        <!-- Checkout Title-->
        <section class="checkout-title">
            <h1>Checkout</h1>
            <p>Complete your purchase and enjoy your games!</p>
        </section>

        <!-- Checkout Form Section-->
        <section class="checkout-section">
            <form>
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName">
                    </div>

                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName">
                    </div>
                </div>

                <div class="form-group">
                    <label for="streetAddress">Street Address</label>
                    <input type="text" id="streetAddress" name="streetAddress">
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="postCode">Post Code</label>
                        <input type="text" id="postCode" name="postCode">
                    </div>

                    <div class="form-group">
                        <label for="phoneNumber">Phone Number</label>
                        <input type="text" id="phoneNumber" name="phoneNumber">
                    </div>
                </div>

                <div class="form-group">
                    <label for="emailAddress">Email Address</label>
                    <input type="email" id="emailAddress" name="emailAddress">
                </div>

                <div class="form-group">
                    <label for="cardDetails">Card Details</label>
                    <input type="text" id="cardDetails" name="cardDetails" placeholder="Card Number">
                </div>

                <div class="grand-total">
                    <label>Grand Total:</label>
                    <span>£0.00</span> <!-- Placeholder for Grand Total -->
                </div>

                <button type="submit" class="complete-order-btn">Complete Order</button>
            </form>
        </section>
    </main>

    <!-- Footer Section-->
    <footer>
            <div class="footer-grid-content">
                <p> &copy 2024 RetroXchange. All rights reserved</p>
                <div>
                <nav class = "navigation-bar">
                    <div class = "navbar-item-login">
                    <a href="#"> <img src = "{{asset('images/facebook.jpg')}}"> Facebook</a>
                    </div>
                    <div class = "navbar-item-login">
                    <a href="#"><img src = "{{asset('images/twitter.png')}}"> Twitter</a>
                    </div>
                    <div class = "navbar-item-login">
                    <a href="#"><img src = "{{asset('images/thegram.jpg')}}"> Instagram</a>
                    </div>
                    <div class = "navbar-item-login">
                    <a href="#"><img src = "{{asset('images/linked.png')}}"> LinkedIn</a>
                    </div>
                </nav>
            </div>
        </footer>
</body>
</html>
