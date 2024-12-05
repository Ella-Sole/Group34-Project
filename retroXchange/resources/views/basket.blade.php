<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width. initial-scale = 1.0">
        <title>Basket</title>
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

        <!-- Main Content -->
        <main>
            <!-- Basket Section -->
            <section class="basket-section">
                <h1>Your Basket</h1>
                <p>Review your selected games before proceeding to checkout!</p>

                <!-- Basket Items -->
                <div class="basket-items">
                    <!--if the basket is not empty-->
                    <!--@if(!empty($testbasket))-->
                        @foreach(Session::get('basket') as $item)
                        <div class="basket-item">
                            <!--Item title and description-->
                            <p>{{ $item->item_name }} <span>{{ $item->item_description }}</span></p>
                            <!--price-->
                            <span>£{{ $item->item_price }}</span>
                            <p>(debug) confirmation text that it's looping</p>
                        </div>
                        @endforeach
                    <!--@endif-->
                    <!--<div class="basket-item">
                        <p>Item 2 - <span>Description of Game 2</span></p>
                        <span>£15.0
                            0</span>
                    </div>
                    <div class="basket-item">
                        <p>Item 3 - <span>Description of Game 3</span></p>
                        <span>£30.00</span>
                    </div>
                    <div class="basket-item">
                        <p>Item 4 - <span>Description of Game 4</span></p>
                        <span>£25.00</span>
                    </div>-->
                </div>

                <!-- Grand Total -->
                <div class="basket-total">
                    <p><strong>Grand Total:</strong></p>
                    <span><strong>£90.00</strong></span> <!-- Placeholder for Grand Total -->
                </div>

                <!-- Action Buttons -->
                <div class="basket-actions">
                    <button onclick="location.href='{{url('/checkout')}}'" class="proceed-btn">Proceed to Checkout</button>
                    <button onclick="location.href='{{url('/products')}}'" class="continue-btn">Continue Shopping</button>
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
