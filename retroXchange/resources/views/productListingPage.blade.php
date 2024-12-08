<!DOCTYPE html>
<html lang="en">
    <x-head>
        @section('title', "Games")
    </x-head>

    <body class = "body-form">
        <x-header-navbar> </x-header-navbar>
         <main>

            <!-- Gaming products  -->
            <section class="product"> 
                <h2 class="product-category">Games</h2>
                <button class="pre-btn"><img src="{{asset('images/arrow-button.png')}}" alt="back-button"></button>
                <button class="nxt-btn"><img src="{{asset('images/arrow-button.png')}}" alt="fwd-button"></button>
            
                <!-- class that holds all products-->
                <div class="product-container">

                    <!-- Products -->
                    <!-- class that holds individual products-->
                     <!--loop through the array $products, each element being a variable $product-->
                     @foreach($products as $product)
                        <div class="product-card">
                            <div class="product-image">
                                <!--make image location point to image named with same item ID-->
                                <img src="{{asset('images/'.$product->item_id.'.jpg')}}" class="product-thumbnail" alt="">
                            </div>
                            <div class="product-info"> <!--product info from database -->
                                <p class="product-brand">{{ $product['category'] }}</p> <!-- Category -->
                                <h2 class="product-short-description">{{ $product['item_name'] }}</h2> <!--*should be title here-->
                                <span class="price">£{{ $product['item_price'] }}</span> <!-- price -->
                                <!--make the button send this products info into basket-->
                                <!--add item to basket when button is clicked, passing in item_id (**add confirmation message to user)-->
                                 <a href = "{{ url('addToBasket/'.$product->item_id) }}">
                                <button type = "submit" class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="add-to-basket" style="height: 25px; width: 25px;"></button>
                                </a>
                            </div>
                        </div>
                    @endforeach

                    <!--commented out the extra frontend placeholder code:-->
                    <!-- Product 2 -->
                    <!--<div class="product-card">
                        <div class="product-image">
                            <img src="LastOfUsRemastered.webp" class="product-thumbnail" alt="">
                        </div>
                        <div class="product-info">
                            <p class="product-brand">PlayStation4 Games</p>
                            <h2 class="product-short-description">Last of Us: Remastered</h2>
                            <span class="price">£10</span>
                            <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="height: 25px; width: 25px;"></button>
                        </div>
                    </div> -->
            
                    <!-- Product 3 -->
                    <!--<div class="product-card">
                        <div class="product-image">
                            <img src="{{asset('images/super_mario.jpg')}}" class="product-thumbnail" alt="">
                        </div>
                        <div class="product-info">
                            <p class="product-brand">Nintendo Switch games</p>
                            <h2 class="product-short-description">Super Mario</h2>
                            <span class="price">£20</span>
                            <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="height: 25px; width: 25px;"></button>
                        </div>
                    </div> -->


                </div>
            </section>

         <!-- Consoles   -->
          
         <!--<section class="product"> 
            <h2 class="product-category">Consoles</h2>
            <button class="pre-btn"><img src="{{asset('images/arrow-button.png')}}" alt="back-button"></button>
            <button class="nxt-btn"><img src="{{asset('images/arrow-button.png')}}" alt="fwd-button"></button>
         <div>
            <div class="product-container"> -->

                <!-- Product 11 -->
            <!--<div class="product-card">
                <div class="product-image">
                    <img src="{{asset('images/Nintendo_switch.jpg')}}" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                    <p class="product-brand">Switch Consoles</p>
                    <h2 class="product-short-description">Nintendo Switch Console 32GB</h2>
                    <span class="price">£200</span>
                    <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="width:20px; height:20px"></button>
                </div>
            </div> -->
            </div> 
         </div>
    <!--</section>-->


         <script src = "{{asset('/script.js')}}"></script>
        </main>

        <!-- Footer Section-->
        <!--<footer>
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
          </footer>-->
          
    </body>
</html>