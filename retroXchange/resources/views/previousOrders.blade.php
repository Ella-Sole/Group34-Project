<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
        <title>Previous Orders</title>
        <link rel="stylesheet" type="text/css" href="{{ url('/style.css') }}" /> <!-- Link to your CSS file -->
    </head>
    <body>
        <!-- Header Section -->
        <header>
            <div class="logo">
                <h1>RetroXchange</h1> <!-- Placeholder for Logo -->
            </div>

            <!-- Navigation Bar -->
            <nav>
                <ul>
                    <li> <a href="{{ url('/home') }}"> Home</a></li>
                    <li> <a href="{{ url('/about') }}">About Us </a></li>
                    <li> <a href="{{ url('/contact') }}"> Contact Us</a></li>
                </ul>
            </nav>
        </header>

        <!-- Main Content -->
        <main>
            <!--PreviousOrders Section-->
            <section class="previous-orders-section">
                <h1>Your Previous Orders</h1>

                <!--PreviousOrders Table-->
                <div class="previous-orders">
                    <!--Example-->
                    <div class="p-order-details">
                        <span class="p-order-description">Order 1</span>
                        <span class="p-order-description">God of War</span>
                        <span class="p-order-description">Total: £60.00</span>
                        <span class="p-order-description">Date: 01/01/2024</span>
                    </div>
                
                    <div class="p-order-details">
                        <span class="p-order-description">Order 2</span>
                        <span class="p-order-description">Black Ops 6</span>
                        <span class="p-order-description">Total: £70.00</span>
                        <span class="p-order-description">Date: 02/02/2024</span>
                    </div>
                
                    <div class="p-order-details">
                        <span class="p-order-description">Order 3</span>
                        <span class="p-order-description">Red Dead Redemption</span>
                        <span class="p-order-description">Total: £30.00</span>
                        <span class="p-order-description">Date: 03/03/2024</span>
                    </div>
                </div>
                
                    <!--PreviousOrders Actions-->
                <div class="previous-orders-actions">
                    <button class="basket-button" onclick="location.href='basketshop.html';">Return to Shopping Basket</button>
                </div>
            </section>
        </main>

        <!-- Footer Section -->
        <footer>
            <div class="footer-content">
                <p>&copy; 2024 RetroXchange. All rights reserved.</p>
                <div class="social-links">
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                    <a href="#">LinkedIn</a>
                </div>
            </div>
        </footer>
    </body>
</html>
