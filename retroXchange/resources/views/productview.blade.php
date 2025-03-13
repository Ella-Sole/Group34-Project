<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Product')
</x-head>

<body class="background page-layout">
<x-header-navbar> </x-header-navbar>

<main>
    <!--message for item being successfully added to basket -->
    @if (session()->has('success'))
            <h1 style="color:red" align="center"> {{session('success')}}</h1>
    @endif

<div class="product-container">

<!-- Product -->
    <div class="product-card">
        <div class="product-image">
            <!--make image location point to image named with same item ID-->
                <img src="{{ url('https://m.media-amazon.com/images/I/' . $product->item_image . '.jpg') }}"
                    class="product-thumbnail" alt="item-image">
        </div>

        <div class="product-info"> <!--product info from database -->
            <p class="product-brand">{{ $product['category'] }}</p> <!-- Category -->
            <h2 class="product-short-description">{{ $product['item_name'] }} - £{{ $product['item_price'] }}</h2> <!--Name & Price-->
            <!--<span class="price">£{{ $product['item_price'] }}</span>-->
            <p>{{ $product['item_description'] }}</p> <!--Description-->
            

            <!--STOCK -->
            @if ($product['item_stock'] == 0)
                <p>OUT OF STOCK</p>
            @else
                <p>{{ $product['item_stock'] }} Available</p>
                <!--option to add to basket only if item is in stock-->
                <a href = "{{ url('addToBasket/' . $product->item_id) }}">
                    <button type = "submit" class="basket"><img src="{{ asset('images/basket-icon.png') }}"
                            alt="add-to-basket" style="height: 25px; width: 25px;"></button>
                </a>
            @endif
        </div>
    </div>


</div>

</main>
</body>

</html>