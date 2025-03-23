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
            <h2 style="color:red" align="center"> {{ session('success') }}</h2>
        @endif

        <!--error message-->
        @if (session()->has('error'))
            <h2 style="color:red" align="center"> {{ session('error') }}</h2>
        @endif

        <!-- Gaming products  -->
        <section class="product">
            <h2 class="product-category">Games</h2>

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
                            <h2 class="product-name">{{ $product['item_name'] }}</h2>
                            <p class="product-rating">⭐⭐⭐⭐⭐</p>
                            <h2 class="price">£{{ $product['item_price'] }}</h2> <!-- price -->

                            @if ($product['item_stock'] <= 0)
                                <!--if out of stock-->
                                <p>OUT OF STOCK</p>
                            @else
                                <!--can only add to basket if in stock-->
                                <!--make the button send this products info into basket-->
                                <!--add item to basket when button is clicked, passing in item_id (**add confirmation message to user)-->
                                <a href = "{{ url('addToBasket/' . $product->item_id) }}">
                                    <button type = "submit" class="product-listing-basket-icon"><img
                                            src="{{ asset('images/basket-icon.png') }}" alt="add-to-basket"
                                            style="height: 25px; width: 25px;"></button>
                                </a>
                            @endif

                        </div>
                    </div>
                @endforeach

            </div>
        </section>
    </main>
    <x-footer> </x-footer>
    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
