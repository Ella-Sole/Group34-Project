<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Your Basket')
</x-head>

<body class = "basket-page-layout background">

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
            <table class="shopping-basket-table">
                <tr>
                    <th> Game </th>
                    <th> Description of Game </th>
                    <th> Quantity </th>
                    <th> Price </th>
                </tr>
                <!--if the basket is not empty-->
                @if (!is_null($thebasket))
                    @foreach ($thebasket as $b)
                        <tr align="center">
                            <td> <span class="game-title">{{ $b['item_name'] }}</span> </td>
                            <td> <span class="game-description">{{ $b['item_description'] }}</span> </td>
                            <td> <span class="game-quantity">{{ $b['quantity'] }}</span> </td>
                            <td> <span class="game-price">£{{ $b['item_price'] }}</span> </td>
                            <td> <a href = "{{ url('removeFromBasket/' . $b->item_id) }}"><button
                                        class="remove-button">Remove</button></a> </td>

                        </tr>

                        <!--check if total price variable is set-->
                        @isset($total)
                            <!--add up total price-->
                            <?php $total = $total + $b['item_price']; ?>
                        @else
                            <!--else its the item's price as its at the start of the loop-->
                            <?php $total = $b['item_price']; ?>
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
                    <p><strong>Total Price:</span>£{{ $total }}</span></strong></p>
                </div>
            @else
                <!--else total price is empty-->
                <div class="shopping-basket-total">
                    <p><strong>Total Price:</span> </span></strong></p>
                </div>
            @endisset

            <!--ShoppingBasket Actions-->
            <div class="shopping-basket-actions">
                <button class="checkout-button" onclick="location.href='{{ url('/checkout') }}'">Proceed to
                    Checkout</button>
                <button class="continue-button" onclick="location.href='{{ url('/products') }}'">Continue
                    Shopping</button>
                <button class="previous-orders-button" onclick="location.href='{{ url('/previousorders') }}'">Previous
                    Orders</button>
            </div>
        </div>
    </main>
    <x-footer> </x-footer>
    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
