<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width. initial-scale = 1.0">
        <title>Shopping Basket</title>
        <link rel="stylesheet" type="text/css" href="{{ url('/style.css') }}" /> <!-- Link to CSS File-->
    </head>
    <body>

        <!-- Header Section-->
        <header>
            <div class="LOGO">
                <h1> RetroXchange</h1> <!-- Placeholder for Logo-->
            </div>

            <!-- Navigation Bar-->
            <nav>
                <ul>
                    <li> <a href="{{ url('/home') }}"> Home</a></li>
                    <li> <a href="{{ url('/about') }}">About Us </a></li>
                    <li> <a href="{{ url('/contact') }}"> Contact Us</a></li>      
                </ul>
            </nav>
        </header>

        <!--Main Content-->
        <main>
            <!-- ShoppingBasket Section-->
            <section class="shopping-basket-section">
                <h2>Your Shopping Basket</h2>
                <p>Review your selected games before proceeding to checkout!</p>

                <!--ShoppingBasket Table-->
                <table class="shopping-basket-table" >
                        <tr>
                            <th> Game </th>
                            <th> Description of Game </th>
                            <th> Price </th>
                        </tr>
                    <!--Example-->
                        <tr align="center">
                            <td> <span class="game-title">Black Ops 6</span> </td>
                            <td> <span class="game-description">Online Multiplayer Shooter</span> </td>
                            <td> <span class="game-price">£10.00</span> </td>
                            <td> <button class="remove-button">Remove</button> </td>
                        </tr>

                        <tr align="center">
                            <td> <span class="game-title">Red Dead Redemption 2</span> </td>
                            <td> <span class="game-description">Open-World Singleplayer Story</span> </td>
                            <td> <span class="game-price">£20.00</span> </td>
                            <td> <button class="remove-button">Remove</button> </td>
                        </tr>

                </table>
                <!--ShoppingBasket Total-->
                <div class="shopping-basket-total">
                    <p><strong>Total Price:</span>£30.00</span></strong></p>
                </div>
                <!--ShoppingBasket Actions-->
                <div class="shopping-basket-actions">
                    <button class="checkout-button" onclick="location.href='Check out page.html';">Proceed to Checkout</button>
                    <button class="continue-button" onclick="location.href='Homepage.html'">Continue Shopping</button>
                    <button class="previous-orders-button" onclick="location.href='PreviousOrders.html'">PreviousOrders</button>
                </div>
            </section>
        </main>

         <!-- Footer Section-->
         <footer>
            <div class="footer-content">
                <p> &copy 2024 RetroXchange. All rights reserved</p>
                <div class="social-links">
                    <a href="#"> Facebook</a>
                    <a href="#"> Twitter</a>
                    <a href="#"> Instagram</a>
                    <a href="#"> LinkedIn</a>
                </div>
            </div>
          </footer>
    </body>
</html>

