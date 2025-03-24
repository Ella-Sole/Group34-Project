<div class="product-card">
    <div class="product-image">
        <a href="{{ url('productview/' . $product->item_id) }}">
            <img src="{{ url('https://m.media-amazon.com/images/I/' . $product->item_image . '.jpg') }}" 
                class="product-thumbnail" alt="item-image">
        </a>
    </div>

    <div class="product-info">
        <div class="product-wrap">
            <p class="product-brand">{{ $product['category'] }}</p>
            <p class="product-rating">&#9733 5.0</p>
        </div>
        <h2 class="product-short-description">{{ $product['item_name'] }}</h2>
        <div class="product-wrap">
            <span class="price">£{{ $product['item_price'] }}</span>

            @if ($product['item_stock'] == 0)
                <p>OUT OF STOCK</p>
            @else
                <a href="{{ url('addToBasket/' . $product->item_id) }}">
                    <button type="submit" class="basket">
                        <img src="{{ asset('images/basket-icon.png') }}" alt="add-to-basket" 
                            style="height: 25px; width: 25px;">
                    </button>
                </a>
            @endif
        </div>
    </div>
</div>

