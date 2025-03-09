<!DOCTYPE html>
<html lang="en">

<x-head>
    @section('title', 'retroXchange')
</x-head>

<body class="background page-layout">
    <x-header-navbar> </x-header-navbar>

    <main>
        <section class="product">
            <h2 class="product-category">Games</h2>
            {{-- <button class="pre-btn"><img src="{{ asset('images/arrow-button.png') }}" alt="back-button"></button>
            <button class="nxt-btn"><img src="{{ asset('images/arrow-button.png') }}" alt="fwd-button"></button> --}}

            <!-- class that holds all products-->
            <div class="product-container">

                <!-- Products -->
                <!-- class that holds individual products-->
                <!--loop through the array $products, each element being a variable $product-->
                <!-- if no products are found, an error message is displayed -->
            @if ($products-> isNotEmpty())
                @foreach ($products as $product)
                    <div class="product-card">
                        <div class="product-image">
                            <a href = "{{ url('productview/' . $product->item_id) }}">
                            <!--make image location point to image named with same item ID-->
                            <img src="{{ url('https://m.media-amazon.com/images/I/' . $product->item_image . '.jpg') }}"
                                class="product-thumbnail" alt="">
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
            @else
                <div>
                    <h2>No products found</h2>
                </div>
            @endif
            </div>

        </section>
    </main>
    <x-footer> </x-footer>
    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
