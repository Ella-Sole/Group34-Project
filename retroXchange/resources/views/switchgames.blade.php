<!DOCTYPE html>
<html lang="en">

<x-head>
    @section('title', 'retroXchange')
</x-head>

<body class="background page-layout">
    <x-header-navbar> </x-header-navbar>

    <main>
        <section class="products">
            <h2 class="product-category">Switch Games</h2>
            <button class="pre-btn">
            <img src="{{ asset('images/arrow-button.png') }}" alt="back-button" style="height: 25px; width: 25px;">
            </button>
            <button class="nxt-btn">
            <img src="{{ asset('images/arrow-button.png') }}" alt="fwd-button" style="height: 25px; width: 25px;">
            </button>
            <!-- class that holds all products-->
            <div class="product-container">
                @foreach ($products->whereIn('category', ['switch']) as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </section>
    </main>
    <x-footer> </x-footer>
    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
