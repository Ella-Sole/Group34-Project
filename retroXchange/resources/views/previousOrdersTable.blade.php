<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width. initial-scale = 1.0">
        <title>Previous Orders</title>
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
                    <li> <a href="{{ url('/') }}"> Home</a></li>
                    <li> <a href="{{ url('/about') }}">About Us </a></li>
                    <li> <a href="{{ url('/contact') }}"> Contact Us</a></li>   
                </ul>
            </nav>
        </header>

        <!--Main Content-->
        <main>
            <!-- PreviousOrders Section-->
            <section class="previous-orders-section">
                <h2>Your Previous Orders</h2>
                <!--PrevousOrders Table-->
                <table class="previous-orders-table">
                        <tr>
                            <th> Game </th>
                            <th> Description of Game </th>
                            <th> Price </th>
                            <th> Date of Purchase </th>
                        </tr>
                    <!--Example-->
                    <tr align="center">
                        <td> <span class="game-title">Black Ops 6</span> </td>
                        <td> <span class="game-description">Online Multiplayer Shooter</span> </td>
                        <td> <span class="game-price">£10.00</span> </td>
                        <td> <span class="purchase-date">01/01/2024</span> </td>
                    </tr>

                    <tr align="center">
                        <td> <span class="game-title">Red Dead Redemption 2</span> </td>
                        <td> <span class="game-description">Open-World Singleplayer Story</span> </td>
                        <td> <span class="game-price">£20.00</span </td>
                        <td> <span class="purchase-date">02/02/2024</span> </td>
                    </tr>
                </table>
                <br>
                <!--PreviousOrders Actions-->
                <div class="previous-orders-actions">
                    <button class="retun-button" onclick="location.href='ShoppingBasket.html';">Return to Shopping Basket</button>
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
