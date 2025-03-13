<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Checkout Page')
</x-head>
          


<body class = "checkout-page-layout background">
    <x-header-navbar> </x-header-navbar>

    <div class="checkout-page-body">
        <main>
            <div class="checkout-title">
                <section>
                    <h1 align="center">Checkout</h1>
                    <p>Complete your purchase and enjoy your games!</p>
                    <!-- display message for errors -->
                    @if (session()->has('error'))
                        <p style="color:red"> {{session('error')}}</p>
                    @endif
                </section>
            </div>

            <table class="shopping-basket-table" style="margin:0 auto;">
                <tr>
                    <th> Game </th>
                    <th> Description of Game </th>
                    <th> Quantity </th>
                    <th> Price </th>
                </tr>

                    @foreach ($thebasket as $b)
                        <tr align="center">
                            <td> <span class="game-title">{{ $b['item_name'] }}</span> </td>
                            <td> <span class="game-description">{{ $b['item_description'] }}</span> </td>
                            <td> <span class="game-quantity">{{ $b['quantity'] }}</span> </td>
                            <td> <span class="game-price">£{{ $b['item_price'] }}</span> </td>
                        </tr>

                        <!--check if total price variable is set-->
                        @isset($total)
                            <!--add up total price-->
                            <?php $total += $b['item_price'] * $b['quantity']; ?>
                        @else
                            <!--else its the item's price as its at the start of the loop-->
                            <?php $total = $b['item_price'] * $b['quantity']; ?>
                        @endisset
                    @endforeach

            </table>

            <div class="checkout-section">
            <section>
                <form action="{{ url('/completecheckout/' . $total) }}" method="POST">
                    <!--csrf for form security-->
                    @csrf
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
                        <span><h1>Total: £{{ $total }}</h1></span>
                    </div>
                        
                    <button type="submit" class="complete-order-btn" >Complete Order</button>
                        
                </form>
            </section>
        </div>
        </main>
    </div>
    <x-footer> </x-footer>
    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
