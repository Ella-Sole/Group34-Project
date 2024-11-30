<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Basket - RetroXchange</title>
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
            <!-- Basket Section -->
            <section class="basket-section">
                <h1>Your Basket</h1>
                <p>Review your selected games before proceeding to checkout!</p>

                <!-- Basket Items -->
                <div class="basket-items">
                    <div class="basket-item">
                        <p>Item 1 - <span>Description of Game 1</span></p>
                        <span>£20.00</span>
                    </div>
                    <div class="basket-item">
                        <p>Item 2 - <span>Description of Game 2</span></p>
                        <span>£15.00</span>
                    </div>
                    <div class="basket-item">
                        <p>Item 3 - <span>Description of Game 3</span></p>
                        <span>£30.00</span>
                    </div>
                    <div class="basket-item">
                        <p>Item 4 - <span>Description of Game 4</span></p>
                        <span>£25.00</span>
                    </div>
                </div>

                <!-- Grand Total -->
                <div class="basket-total">
                    <p><strong>Grand Total:</strong></p>
                    <span><strong>£90.00</strong></span> <!-- Placeholder for Grand Total -->
                </div>

                <!-- Action Buttons -->
                <div class="basket-actions">
                    <button onclick="location.href='Checkout.html'" class="proceed-btn">Proceed to Checkout</button>
                    <button onclick="location.href='Homepage.html'" class="continue-btn">Continue Shopping</button>
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
