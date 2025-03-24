<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', $product['item_name'])
</x-head>


<body class = "contact-us-page-layout background">
    <x-header-navbar> </x-header-navbar>

    <!--message for item being successfully added to basket -->
    @if (session()->has('success'))
        <h2 style="color:red" align="center"> {{ session('success') }}</h2>
    @endif

    <!--error message-->
    @if (session()->has('error'))
        <h2 style="color:red" align="center"> {{ session('error') }}</h2>
    @endif

    <div class="product-listing-grid">
        <div class="product-listing-image">
            <img src="{{ url('https://m.media-amazon.com/images/I/' . $product->item_image . '.jpg') }}" alt="item-image">
        </div>

        <div class="product-listing-reviews">
            <a href="{{ url('/viewreviews/' . $product->item_id) }}" class="product-listing-rating">
                <h2 class="product-listing-rating-text">User Rating: &#9733 &#9733 &#9733 &#9733 &#9733 4.6 (20)</h2>
            </a>
        </div>

        <div class="product-listing-details">
            <div class="product-listing-title">
                <h1>{{ $product['item_name'] }}</h1>
            </div><br>

            <div class="product-listing-category">
                <p>Category: {{ $product['category'] }}</p>
            </div><br>

            <div class="product-listing-description">
                <ul>
                    <li>{{ $product['item_description'] }}</li>
                </ul>
            </div><br>

            <div class="product-listing-price">
                <p>£{{ $product['item_price'] }}</p>

                @if ($product['item_stock'] > 0)
                    <!--option to add to basket only if item is in stock-->
                    <p>Add to Basket:
                        <div style="height:5px;"></div>
                        <a href = "{{ url('addToBasket/' . $product->item_id) }}">
                            <button type = "submit" class="basket no-white-background"><img src="{{ asset('images/basket-icon.png') }}"
                                    alt="add-to-basket"
                                    style="height: 50px; width: 50px; vertical-align:middle"
                                    class="white-outline-for-button"></button>
                        </a>
                    </p>
                @endif
            </div><br>

            <div class="product-list-availability">
                <!--STOCK -->
                @if ($product['item_stock'] <= 0)
                    <p class="keep-it-red">OUT OF STOCK</p>
                @else
                    <p class="keep-it-red">({{ $product['item_stock'] }} Available)</p>
                @endif
            </div><br>

            

        </div>
    </div>

    <x-footer> </x-footer>

    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
