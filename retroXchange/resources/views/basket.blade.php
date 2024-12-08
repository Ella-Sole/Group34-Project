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

        <x-header-navbar> </x-header-navbar>

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
                            @else
                                <!--else its the item's price as its at the start of the loop-->
                                <?php $total = $b['item_price'] ?>
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
