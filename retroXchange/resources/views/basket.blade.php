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

        <!--Main Content-->
        <main>
            <!-- ShoppingBasket Section-->
            <div class="shopping-basket">
                <div class="basket-item">
                <h2>Your Shopping Basket</h2>
                <p>Review your selected games before proceeding to checkout!</p>
                </div>
                <!--ShoppingBasket Table-->
                <table class="shopping-basket-table" >
                        <tr>
                            <th> Game </th>
                            <th> Description of Game </th>
                            <th> Quantity </th>
                            <th> Price </th>
                        </tr>
                        <!--if the basket is not empty-->
                    @if(!is_null($thebasket))
                        @foreach($thebasket as $b)
                            <tr align="center">
                                <td> <span class="game-title">{{ $b['item_name'] }}</span> </td>
                                <td> <span class="game-description">{{ $b['item_description'] }}</span> </td>
                                <td> <span class="game-quantity">1</span> </td>
                                <td> <span class="game-price">£{{ $b['item_price'] }}</span> </td>
                                <td> <a href = "{{ url('removeFromBasket/'.$b->item_id) }}"><button class="remove-button">Remove</button></a> </td>
                                
                            </tr>

                            <!--check if total price variable is set-->
                            @isset($total)
                                <!--add up total price-->
                                <?php $total = $total + $b['item_price'] ?>
                                <!--else its intially £0-->
                            @else
                                <?php $total = 0 ?>
                            @endisset
                        @endforeach
                    @else
                        <p> Basket is currently empty!</p>
                    @endif

                </table>

                <!--displays total price if theres a total variable set-->
                @isset($total)
                    <!--ShoppingBasket Total-->
                    <div class="shopping-basket-total">
                        <p><strong>Total Price:</span>£{{$total}}</span></strong></p>
                    </div>
                @else <!--else total price is empty-->
                    <div class="shopping-basket-total">
                        <p><strong>Total Price:</span> </span></strong></p>
                    </div>
                @endisset

                <!--ShoppingBasket Actions-->
                <div class="shopping-basket-actions">
                    <button class="checkout-button" onclick="location.href='{{url('/checkout')}}'">Proceed to Checkout</button>
                    <button class="continue-button" onclick="location.href='{{url('/products')}}'">Continue Shopping</button>
                    <button class="previous-orders-button" onclick="location.href='{{url('/previousorders')}}'">Previous Orders</button>
                </div>
            </div>
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
