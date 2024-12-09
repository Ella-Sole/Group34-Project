<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Checkout Page')
</x-head>

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
    <x-footer> </x-footer>
    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
