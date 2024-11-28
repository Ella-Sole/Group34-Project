<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width. initial-scale = 1.0">
        <link rel="stylesheet" href="{{asset('/style.css')}}"> <!-- Link to CSS File-->
        <title>Products</title>
    </head>

    <body>
                    <!-- Header Section-->
         <header>

          <!-- Navigation Bar-->
         <nav>
             <ul>
                <li><div class="LOGO">
                        <img src="{{asset('images/RetroXchange-Logo.png')}}" alt="RetroXchange"
                        style="width:100px;height:100px;"></div></li>
                <li> <a href="{{url('/home')}}"> Home</a></li>
                <li> <a href="{{url('/about')}}">About Us </a></li>
                <li> <a href="{{url('/contact')}}"> Contact Us</a></li>
            </ul>
        </nav>
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
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{asset('images/fifa21.jpg')}}" class="product-thumbnail" alt="">
                        </div>
                        <div class="product-info">
                            <p class="product-brand">PlayStation4 Games</p>
                            <h2 class="product-short-description">EA Sports Fifa 21</h2>
                            <span class="price">£2</span>
                            <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="height: 25px; width: 25px;"></button>
                        </div>
                    </div>
            
                    <!-- Product 2 ******-->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="LastOfUsRemastered.webp" class="product-thumbnail" alt="">
                        </div>
                        <div class="product-info">
                            <p class="product-brand">PlayStation4 Games</p>
                            <h2 class="product-short-description">Last of Us: Remastered</h2>
                            <span class="price">£10</span>
                            <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="height: 25px; width: 25px;"></button>
                        </div>
                    </div>
            
                    <!-- Product 3 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{asset('images/super_mario.jpg')}}" class="product-thumbnail" alt="">
                        </div>
                        <div class="product-info">
                            <p class="product-brand">Nintendo Switch games</p>
                            <h2 class="product-short-description">Super Mario</h2>
                            <span class="price">£20</span>
                            <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="height: 25px; width: 25px;"></button>
                        </div>
                    </div>
            
                    <!-- Product 4 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{asset('images/Zelda.jpg')}}" class="product-thumbnail" alt="">
                        </div>
                        <div class="product-info">
                            <p class="product-brand">Nintendo Switch games</p>
                            <h2 class="product-short-description">The Legend of Zelda: Breath of the Wild</h2>
                            <span class="price">£13</span>
                            <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="height: 25px; width: 25px;"></button>
                        </div>
                    </div>
            
                    <!-- Product  5 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{asset('images/Red_Dead_Redemption.jpg')}}" class="product-thumbnail" alt="">
                        </div>
                        <div class="product-info">
                            <p class="product-brand">Playstaion4 Games</p>
                            <h2 class="product-short-description">Red Dead Redemption</h2>
                            <span class="price">£25</span>
                            <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="height: 25px; width: 25px;"></button>
                        </div>
                    </div>
            
                    <!-- Product 6 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{asset('images/gta.jpg')}}" class="product-thumbnail" alt="">
                        </div>
                        <div class="product-info">
                            <p class="product-brand">Xbox360 Games</p>
                            <h2 class="product-short-description">Grand Theft Auto V</h2>
                            <span class="price">£15</span>
                            <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="height: 25px; width: 25px;"></button>
                        </div>
                    </div>
            
                    <!-- Product 7 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{asset('images/fallout.jpg')}}" class="product-thumbnail" alt="">
                        </div>
                        <div class="product-info">
                            <p class="product-brand">Xbox Games</p>
                            <h2 class="product-short-description">Fallout</h2>
                            <span class="price">£4</span>
                            <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt=" "style="height: 25px; width: 25px;"></button>
                        </div>
                    </div>
            
                    <!-- Product 8 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{asset('images/animal_crossing.jpg')}}" class="product-thumbnail" alt="">
                        </div>
                        <div class="product-info">
                            <p class="product-brand">Nintendo Switch games</p>
                            <h2 class="product-short-description">Animal Crossing: New Horizons</h2>
                            <span class="price">£30</span>
                            <button class="basket"><img src="{{asset('images/basket-icon.png')}}" style="height: 25px; width: 25px;"></button>
                        </div>
                    </div>

                     <!-- Product 9 -->
                    <div class="product-card">
                        <div class="product-image">
                        <img src="{{asset('images/overwatch.jpg')}}" class="product-thumbnail" alt="">
                    </div>
                    <div class="product-info">
                         <p class="product-brand">Playstation4 games</p>
                        <h2 class="product-short-description">Overwatch</h2>
                        <span class="price">£12</span>
                        <button class="basket"><img src="{{asset('images/basket-icon.png')}}" style="height: 25px; width: 25px;"></button>
                     </div>
                    </div>

                    <!-- Product 10 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{asset('images/Wii-Sports.jpg')}}" class="product-thumbnail" alt="">
                        </div>
                        <div class="product-info">
                            <p class="product-brand">Wii Console Games</p>
                            <h2 class="product-short-description">Wii Sports</h2>
                            <span class="price">£30</span>
                            <button class="basket"><img src="{{asset('images/basket-icon.png')}}" style="height: 25px; width: 25px;"></button>
                        </div>
                    </div>


                </div>
            </section>

         <!-- Consoles   -->
          
         <section class="product"> 
            <h2 class="product-category">Consoles</h2>
            <button class="pre-btn"><img src="{{asset('images/arrow-button.png')}}" alt="back-button"></button>
            <button class="nxt-btn"><img src="{{asset('images/arrow-button.png')}}" alt="fwd-button"></button>
         <div>
            <div class="product-container">

                <!-- Product 11 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('images/Nintendo_switch.jpg')}}" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                    <p class="product-brand">Switch Consoles</p>
                    <h2 class="product-short-description">Nintendo Switch Console 32GB</h2>
                    <span class="price">£200</span>
                    <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="width:20px; height:20px"></button>
                </div>
            </div>
            <!-- Product 12 ******-->
            <div class="product-card">
                <div class="product-image">
                    <img src="ps4_black_unboxed.jpg" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                    <p class="product-brand">PlayStation4 Consoles</p>
                    <h2 class="product-short-description">PS4 Black, Unboxed</h2>
                    <span class="price">£210</span>
                    <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="width:20px; height:20px"></button>
                </div>
            </div>
            <!-- Product 13 *****-->
            <div class="product-card">
                <div class="product-image">
                    <img src="ps5_white_boxed.jpg" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                    <p class="product-brand">PlayStation5 Consoles</p>
                    <h2 class="product-short-description">PS5 Console, White, Boxed</h2>
                    <span class="price">£400</span>
                    <button class="basket"><img src="basket-icon.png" alt="" style="width:20px; height:20px"></button>
                </div>
            </div>
            <!-- Product 14 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('images/ps5_white_unboxed.jpg')}}" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                    <p class="product-brand">PlayStation5 Consoles</p>
                    <h2 class="product-short-description">PS5 Console, 825GB, White, Unboxed</h2>
                    <span class="price">£350</span>
                    <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="width:20px; height:20px"></button>
                </div>
            </div>
            <!-- Product 15 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('images/xbox_seriesX.jpg')}}" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                    <p class="product-brand">Xbox Series Consoles</p>
                    <h2 class="product-short-description">Xbox Series X Console, 512GB</h2>
                    <span class="price">£220</span>
                    <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="width:20px; height:20px"></button>
                </div>
            </div>
            <!-- Product 16 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('images/xbox_seriesS.jpg')}}" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                    <p class="product-brand">Xbox Series Consoles</p>
                    <h2 class="product-short-description">Xbox Series S Console, 1TB</h2>
                    <span class="price">£320</span>
                    <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="width:20px; height:20px"></button>
                </div>
            </div>
            <!-- Product 17 *****-->
            <div class="product-card">
                <div class="product-image">
                    <img src="ps4_black_controller.jpg" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                    <p class="product-brand">PlayStation4 Accessories</p>
                    <h2 class="product-short-description">PS4 Controller, Black</h2>
                    <span class="price">£50</span>
                    <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="width:20px; height:20px"></button>
                </div>
            </div>
             <!-- Product 18 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('images/xbox_controller.jpg')}}" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                    <p class="product-brand">Xbox Accessories</p>
                    <h2 class="product-short-description">Xbox Controller, Blue</h2>
                    <span class="price">£48</span>
                    <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="width:20px; height:20px"></button>
                </div>
            </div>

            <!-- Product 19 ****-->
            <div class="product-card">
                <div class="product-image">
                    <img src="ps4-controller-red-accessory.webp" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                <p class="product-brand">Xbox Accessories</p>
                                <h2 class="product-short-description">Xbox Controller, Red</h2>
                                <span class="price">£48</span>
                                <button class="basket"><img src="{{asset('images/basket-icon.png')}}" alt="" style="width:20px; height:20px"></button>
                            </div>
                        </div>

            <!-- Product 20 -->
            <div class="product-card">
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
    </section>


         <script src = "{{asset('/script.js')}}"></script>
        </main>
    </body>
</html>