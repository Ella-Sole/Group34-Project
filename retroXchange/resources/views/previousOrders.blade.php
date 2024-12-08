<<!DOCTYPE html>
<html lang="en">
    <x-head>
        @section('title', "Previous Orders")
    </x-head>

    <body class = "body-form">

        <x-header-navbar> </x-header-navbar>

    <main>
        <!--PreviousOrders Section-->
        <section class="previous-orders-section">
            <h1>Your Previous Orders</h1>
            <p>Review your past orders</p>

            <!--PreviousOrders Table-->   
                <div class="order-details">
                    <!--Exampele-->
                    <span class="p-game-image"><img src="assets/images/Red_Dead_Redemption.jpg" alt="RDR Image"></span>
                    <span class="order-id">Order 1</span>
                    <span class="p-game-title"><b>Red Dead Redemption</b></span>
                    <span class="p-quantity">1</span>
                    <span class="order-date"><p>Purchase Date:</p><p class="order-date1">01/01/2024</p></span>
                    <span class="p-game-price">Total: £10.00</span>
                </div>

                <div class="order-details">
                    <span class="p-game-image"><img src="assets/images/gta.jpg" alt="GTA Image"></span>
                    <span class="order-id">Order 2</span>
                    <span class="p-game-title"><b>Grand Theft Auto V</b></span>
                    <span class="p-quantity">2</span>
                    <span class="order-date"><p>Purchase Date:</p><p class="order-date1">02/02/2024</p></span>
                    <span class="p-game-price">Total: £30.00</span>
                </div>

                <div class="order-details">
                    <span class="p-game-image"><img src="assets/images/animal crossing.jpg" alt="Animal Crossing Image"></span>
                    <span class="order-id">Order 3</span>
                    <span class="p-game-title"><b>Animal Crossing</b></span>
                    <span class="p-quantity">1</span>
                    <span class="order-date"><p>Purchase Date:</p><p class="order-date1">03/03/2024</p></span>
                    <span class="p-game-price">Total: £20.00</span>
                </div>
                
                <!--PreviousOrders Actions-->
            <div class="previous-orders-actions">
                <button class="basket-button" onclick="location.href='{{url('/basket')}}'">Return to Shopping Basket</button>
            </div>
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