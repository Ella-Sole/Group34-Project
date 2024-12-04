<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width. initial-scale = 1.0">
        <title>Games</title>
        <link rel="stylesheet" href="{{asset('/style.css')}}"> <!-- Link to CSS File-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    
    </head>

    <body class = "body-form">

        <!-- Header Section-->
        <header>
            <!-- Header Section-->
             <div class = "header-grid-layout">
                <div class="side-menu">
                    <!-- This SVG was obtained from the bootstrap website -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" fill="currentColor"
                        class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                    </svg></a>
                </div>
                <div class="logo-div">
                    <img src="{{asset('images/logo.png')}}" alt="retroxchange-logo" class="retroxchange-logo">
                </div>
                <div class="search-bar-placement">
                    <div class="search-bar-temp">
                        <p>Temporary Searchbar Placeholder</p>
                        <!-- This SVG was obtained from the bootstrap website -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                    </div>
                </div>
                <div class="basket-icon">
                    <a href="{{url('/basket')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.7rem" height="2rem" fill="currentColor"
                        class="bi bi-basket3-fill" viewBox="0 0 16 16">
                        <path
                            d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.468 15.426.943 9h14.114l-1.525 6.426a.75.75 0 0 1-.729.574H3.197a.75.75 0 0 1-.73-.574z" />
                    </svg>
                    </a>
                </div>
                <div class="login-icon">
                    <a href="{{url('/login')}}"></a>
                    <!-- This SVG was obtained from the bootstrap website -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" fill="currentColor"
                        class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg>
                    </div>
    
                <!-- Navigation Bar-->
                 <div class = "navigation-bar-flexbox">
                 <nav class=navigation-bar>
                <div class="navbar-item">
                    <a href="{{url('/')}}">HOME</a>
                    </div>
                    <div class="navbar-item">
                        <a href="{{url('/login')}}">LOG IN</a>
                    </div>
                    <div class="navbar-item">
                        <a href="{{url('/products')}}">GAMES</a>
                    </div>
                    <!--<div class="navbar-item">
                        <a href="#">CONSOLES</a>
                    </div>-->
                    <div class="navbar-item">
                        <a href="{{url('/about')}}">ABOUT US</a>
                    </div>
                    <div class="navbar-item">
                        <a href="{{url('/contact')}}">CONTACT US</a>
                    </div>
                </nav>
                </div>
                </div>
    
    
             </header>


         <main>

            <!-- Gaming products  -->
            <section class="product"> 
                <h2 class="product-category">Games</h2>
                <button class="pre-btn"><img src="{{asset('images/arrow-button.png')}}" alt="back-button"></button>
                <button class="nxt-btn"><img src="{{asset('images/arrow-button.png')}}" alt="fwd-button"></button>
            
                <!-- class that holds all products-->
                <div class="product-container">

                    <!-- Product 1 -->
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
                                <!--alt do url if not work!! add item to basket when button is clicked (**add confirmation message to user)-->
                                 <a href = "{{ url('addToBasket/'.$product->item_id) }}">
                                <button type = "submit" class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="add-to-basket" style="height: 25px; width: 25px;"></button>
                                </a>
                            </div>
                        </div>
                    @endforeach

                    <!--commented out the extra frontend placeholder code:-->
                    <!-- Product 2 ******-->
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
            
                    <!-- Product 4 -->
                    <!--<div class="product-card">
                        <div class="product-image">
                            <img src="{{asset('images/Zelda.jpg')}}" class="product-thumbnail" alt="">
                        </div>
                        <div class="product-info">
                            <p class="product-brand">Nintendo Switch games</p>
                            <h2 class="product-short-description">The Legend of Zelda: Breath of the Wild</h2>
                            <span class="price">£13</span>
                            <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="height: 25px; width: 25px;"></button>
                        </div>
                    </div> -->
            
                    <!-- Product  5 -->
                    <!--<div class="product-card">
                        <div class="product-image">
                            <img src="{{asset('images/Red_Dead_Redemption.jpg')}}" class="product-thumbnail" alt="">
                        </div>
                        <div class="product-info">
                            <p class="product-brand">Playstaion4 Games</p>
                            <h2 class="product-short-description">Red Dead Redemption</h2>
                            <span class="price">£25</span>
                            <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="height: 25px; width: 25px;"></button>
                        </div>
                    </div>-->
            
                    <!-- Product 6 -->
                    <!--<div class="product-card">
                        <div class="product-image">
                            <img src="{{asset('images/gta.jpg')}}" class="product-thumbnail" alt="">
                        </div>
                        <div class="product-info">
                            <p class="product-brand">Xbox360 Games</p>
                            <h2 class="product-short-description">Grand Theft Auto V</h2>
                            <span class="price">£15</span>
                            <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="height: 25px; width: 25px;"></button>
                        </div>
                    </div> -->
            
                    <!-- Product 7 -->
                    <!--<div class="product-card">
                        <div class="product-image">
                            <img src="{{asset('images/fallout.jpg')}}" class="product-thumbnail" alt="">
                        </div>
                        <div class="product-info">
                            <p class="product-brand">Xbox Games</p>
                            <h2 class="product-short-description">Fallout</h2>
                            <span class="price">£4</span>
                            <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt=" "style="height: 25px; width: 25px;"></button>
                        </div>
                    </div>-->
            
                    <!-- Product 8 -->
                    <!--<div class="product-card">
                        <div class="product-image">
                            <img src="{{asset('images/animal_crossing.jpg')}}" class="product-thumbnail" alt="">
                        </div>
                        <div class="product-info">
                            <p class="product-brand">Nintendo Switch games</p>
                            <h2 class="product-short-description">Animal Crossing: New Horizons</h2>
                            <span class="price">£30</span>
                            <button class="basket"><img src="{{asset('images/basket-icon.png')}}" style="height: 25px; width: 25px;"></button>
                        </div>
                    </div>-->

                     <!-- Product 9 -->
                    <!--<div class="product-card">
                        <div class="product-image">
                        <img src="{{asset('images/overwatch.jpg')}}" class="product-thumbnail" alt="">
                    </div>
                    <div class="product-info">
                         <p class="product-brand">Playstation4 games</p>
                        <h2 class="product-short-description">Overwatch</h2>
                        <span class="price">£12</span>
                        <button class="basket"><img src="{{asset('images/basket-icon.png')}}" style="height: 25px; width: 25px;"></button>
                     </div>
                    </div>-->

                    <!-- Product 10 -->
                    <!--<div class="product-card">
                        <div class="product-image">
                            <img src="{{asset('images/Wii-Sports.jpg')}}" class="product-thumbnail" alt="">
                        </div>
                        <div class="product-info">
                            <p class="product-brand">Wii Console Games</p>
                            <h2 class="product-short-description">Wii Sports</h2>
                            <span class="price">£30</span>
                            <button class="basket"><img src="{{asset('images/basket-icon.png')}}" style="height: 25px; width: 25px;"></button>
                        </div>
                    </div>-->


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
            <!-- Product 12 ******-->
            <!--<div class="product-card">
                <div class="product-image">
                    <img src="ps4_black_unboxed.jpg" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                    <p class="product-brand">PlayStation4 Consoles</p>
                    <h2 class="product-short-description">PS4 Black, Unboxed</h2>
                    <span class="price">£210</span>
                    <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="width:20px; height:20px"></button>
                </div>
            </div>-->
            <!-- Product 13 *****-->
            <!--<div class="product-card">
                <div class="product-image">
                    <img src="ps5_white_boxed.jpg" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                    <p class="product-brand">PlayStation5 Consoles</p>
                    <h2 class="product-short-description">PS5 Console, White, Boxed</h2>
                    <span class="price">£400</span>
                    <button class="basket"><img src="basket-icon.png" alt="" style="width:20px; height:20px"></button>
                </div>
            </div>-->
            <!-- Product 14 -->
            <!--<div class="product-card">
                <div class="product-image">
                    <img src="{{asset('images/ps5_white_unboxed.jpg')}}" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                    <p class="product-brand">PlayStation5 Consoles</p>
                    <h2 class="product-short-description">PS5 Console, 825GB, White, Unboxed</h2>
                    <span class="price">£350</span>
                    <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="width:20px; height:20px"></button>
                </div>
            </div>-->
            <!-- Product 15 -->
            <!--<div class="product-card">
                <div class="product-image">
                    <img src="{{asset('images/xbox_seriesX.jpg')}}" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                    <p class="product-brand">Xbox Series Consoles</p>
                    <h2 class="product-short-description">Xbox Series X Console, 512GB</h2>
                    <span class="price">£220</span>
                    <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="width:20px; height:20px"></button>
                </div>
            </div>-->
            <!-- Product 16 -->
            <!--<div class="product-card">
                <div class="product-image">
                    <img src="{{asset('images/xbox_seriesS.jpg')}}" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                    <p class="product-brand">Xbox Series Consoles</p>
                    <h2 class="product-short-description">Xbox Series S Console, 1TB</h2>
                    <span class="price">£320</span>
                    <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="width:20px; height:20px"></button>
                </div>
            </div>-->
            <!-- Product 17 *****-->
           <!-- <div class="product-card">
                <div class="product-image">
                    <img src="ps4_black_controller.jpg" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                    <p class="product-brand">PlayStation4 Accessories</p>
                    <h2 class="product-short-description">PS4 Controller, Black</h2>
                    <span class="price">£50</span>
                    <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="width:20px; height:20px"></button>
                </div>
            </div>-->
             <!-- Product 18 -->
            <!--<div class="product-card">
                <div class="product-image">
                    <img src="{{asset('images/xbox_controller.jpg')}}" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                    <p class="product-brand">Xbox Accessories</p>
                    <h2 class="product-short-description">Xbox Controller, Blue</h2>
                    <span class="price">£48</span>
                    <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="width:20px; height:20px"></button>
                </div>
            </div>-->

            <!-- Product 19 ****-->
            <!--<div class="product-card">
                <div class="product-image">
                    <img src="ps4-controller-red-accessory.webp" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                <p class="product-brand">Xbox Accessories</p>
                                <h2 class="product-short-description">Xbox Controller, Red</h2>
                                <span class="price">£48</span>
                                <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="width:20px; height:20px"></button>
                            </div>
                        </div>-->

            <!-- Product 20 -->
            <!--<div class="product-card">
                <div class="product-image">
                    <img src="{{asset('images/xbox_360.jpg')}}" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                    <p class="product-brand">Xbox Consoles</p>
                    <h2 class="product-short-description">Xbox360 500GB</h2>
                    <span class="price">£200</span>
                    <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="width:20px; height:20px"></button>
                </div>
            </div>
            </div> 
         </div>
    </section>-->


         <script src = "{{asset('/script.js')}}"></script>
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