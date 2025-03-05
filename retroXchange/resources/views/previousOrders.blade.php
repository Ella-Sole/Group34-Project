<!DOCTYPE html>
    <html lang="en">
    <x-head>
        @section('title', 'Previous Orders')
    </x-head>

    <body class = "previous-order-page-layout background">

        <x-header-navbar> </x-header-navbar>
          


        <main>
            <section class="previous-orders-section">
                <h1>Your Previous Orders</h1>
                <p>Review your past orders</p>


                <div class="order-details">

                    <span class="p-game-image"><img src="assets/images/Red_Dead_Redemption.jpg" alt="RDR Image"></span>
                    <span class="order-id">Order 1</span>
                    <span class="p-game-title"><b>Red Dead Redemption</b></span>
                    <span class="p-quantity">1</span>
                    <span class="order-date">
                        <p>Purchase Date:</p>
                        <p class="order-date1">01/01/2024</p>
                    </span>
                    <span class="p-game-price">Total: £10.00</span>
                </div>

                <div class="order-details">
                    <span class="p-game-image"><img src="assets/images/gta.jpg" alt="GTA Image"></span>
                    <span class="order-id">Order 2</span>
                    <span class="p-game-title"><b>Grand Theft Auto V</b></span>
                    <span class="p-quantity">2</span>
                    <span class="order-date">
                        <p>Purchase Date:</p>
                        <p class="order-date1">02/02/2024</p>
                    </span>
                    <span class="p-game-price">Total: £30.00</span>
                </div>

                <div class="order-details">
                    <span class="p-game-image"><img src="assets/images/animal crossing.jpg"
                            alt="Animal Crossing Image"></span>
                    <span class="order-id">Order 3</span>
                    <span class="p-game-title"><b>Animal Crossing</b></span>
                    <span class="p-quantity">1</span>
                    <span class="order-date">
                        <p>Purchase Date:</p>
                        <p class="order-date1">03/03/2024</p>
                    </span>
                    <span class="p-game-price">Total: £20.00</span>
                </div>

                <div class="previous-orders-actions">
                    <button class="basket-button" onclick="location.href='{{ url('/basket') }}'">Return to Shopping
                        Basket</button>
                </div>
            </section>
        </main>
        <x-footer> </x-footer>
        <script src="{{ asset('/script.js') }}"></script>
    </body>

    </html>
