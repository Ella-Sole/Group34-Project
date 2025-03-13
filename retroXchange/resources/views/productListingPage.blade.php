<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Games')
</x-head>

<body class = "games-page-layout background">
    <x-header-navbar> </x-header-navbar>
        

    <main>
        <!--message for item being successfully added to basket -->
         @if (session()->has('success'))
            <h1 style="color:red" align="center"> {{session('success')}}</h1>
        @endif

        <!-- Gaming products  -->
        <section class="product">
            <h2 class="product-category">Games</h2>
            <button class="pre-btn"><img src="{{ asset('images/arrow-button.png') }}" alt="back-button"></button>
            <button class="nxt-btn"><img src="{{ asset('images/arrow-button.png') }}" alt="fwd-button"></button>

            <!-- class that holds all products-->
            <div class="product-container">

                <!-- Products -->
                <!-- class that holds individual products-->
                <!--loop through the array $products, each element being a variable $product-->
                @foreach ($products as $product)
                    <div class="product-card">
                        <div class="product-image">
                            <!--make image location point to image named with same item ID-->
                            <a href = "{{ url('productview/' . $product->item_id) }}">
                                <img src="{{ url('https://m.media-amazon.com/images/I/' . $product->item_image . '.jpg') }}"
                                    class="product-thumbnail" alt="item-image">
                            </a>
                        </div>

                        <div class="product-info"> <!--product info from database -->
                            <p class="product-brand">{{ $product['category'] }}</p> <!-- Category -->
                            <h2 class="product-short-description">{{ $product['item_name'] }}</h2>
                            <span class="price">£{{ $product['item_price'] }}</span> <!-- price -->

                            @if ($product['item_stock'] == 0)
                                <!--if out of stock-->
                                <p>OUT OF STOCK</p>
                            @else <!--can only add to basket if in stock-->
                                <!--make the button send this products info into basket-->
                                <!--add item to basket when button is clicked, passing in item_id (**add confirmation message to user)-->
                                <a href = "{{ url('addToBasket/' . $product->item_id) }}">
                                    <button type = "submit" class="basket"><img src="{{ asset('images/basket-icon.png') }}"
                                            alt="add-to-basket" style="height: 25px; width: 25px;"></button>
                                </a>
                            @endif

                        </div>
                    </div>
                @endforeach

            </div>
        </section>

        <!-- Consoles   -->

        <!--<section class="product">
            <h2 class="product-category">Consoles</h2>
            <button class="pre-btn"><img src="{{ asset('images/arrow-button.png') }}" alt="back-button"></button>
            <button class="nxt-btn"><img src="{{ asset('images/arrow-button.png') }}" alt="fwd-button"></button>
         <div>
            <div class="product-container"> -->

        <!-- Product 11 -->
        <!--<div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('images/Nintendo_switch.jpg') }}" class="product-thumbnail" alt="">
                </div>
                <div class="product-info">
                    <p class="product-brand">Switch Consoles</p>
                    <h2 class="product-short-description">Nintendo Switch Console 32GB</h2>
                    <span class="price">£200</span>
                    <button class="basket"><img src="{{ asset('images/basket-icon.png') }}" alt="" style="width:20px; height:20px"></button>
                </div>
            </div> -->
        </div>
        </div>
        <!--</section>-->


    </main>
    <x-footer> </x-footer>
    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
