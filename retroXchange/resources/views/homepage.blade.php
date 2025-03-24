<!DOCTYPE html>
<html lang="en">

<x-head>
    @section('title', 'retroXchange')
</x-head>

<body class="contact-us-page-layout background">
    <x-header-navbar> </x-header-navbar>

    <main>

        {{-- //for debugging
        @if (Auth::check())
            <p> authenticated </p>
        @else
            <p> not authenticated </p>
        @endif --}}

        <!-- message that will display either successful login/logout or item added to basket -->
        @if (session()->has('success'))
            <p style="color:red"> {{ session('success') }}</p>
        @endif

        <div style="height:30px;"></div>

        <section class="products">
            <h2 class="product-category">Recommended For You</h2>
            <x-product-card-buttons />
            <!-- class that holds all products-->
            <div class="product-container">
                <!-- Products -->
                <!-- class that holds individual products-->
                <!--loop through the array $products, each element being a variable $product-->
                @foreach ($products as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </section>
        <div style="height:30px;"></div>

        <section class="products">
            <h2 class="product-category">Popular Products</h2>
            <x-product-card-buttons />
            <div class="product-container">
                @foreach ($products as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </section>

        <div style="height:30px;"></div>

        <section class="products">
            <h2 class="product-category">Gaming</h2>
            <x-product-card-buttons />
            <div class="product-container">
                @foreach ($products as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </section>

        <div style="height:30px;"></div>
    </main>

    <x-footer> </x-footer>
    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
