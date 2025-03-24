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
        {{-- <section class="products">
            <h2 class="product-category">Games</h2>
            <x-product-card-buttons />
            <!-- class that holds all products-->
            <div class="product-container">
                @foreach ($products->whereIn('category', ['ps3', 'ps4', 'xbox one', 'xbox 360', 'switch']) as $product)
                <x-product-card :product="$product"/>
                @endforeach
            </div>
        </section> --}}

        <div style="height:30px;"></div>

        <section class="products">
            <h2 class="product-category">Playstation Games</h2>
            <x-product-card-buttons />
            <!-- class that holds all products-->
            <div class="product-container">
                <!-- Products -->
                <!-- class that holds individual products-->
                <!--loop through the array $products, each element being a variable $product-->
                @foreach ($products->whereIn('category', ['ps3', 'ps4']) as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </section>

        <div style="height:30px;"></div>

        <section class="products">
            <h2 class="product-category">Microsoft Games</h2>
            <x-product-card-buttons />
            <!-- class that holds all products-->
            <div class="product-container">
                <!-- Products -->
                <!-- class that holds individual products-->
                <!--loop through the array $products, each element being a variable $product-->
                @foreach ($products->whereIn('category', ['xbox one', 'xbox 360']) as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </section>

        <div style="height:30px;"></div>

        <section class="products">
            <h2 class="product-category">Nintendo Games</h2>
            <x-product-card-buttons />
            <!-- class that holds all products-->
            <div class="product-container">
                <!-- Products -->
                <!-- class that holds individual products-->
                <!--loop through the array $products, each element being a variable $product-->
                @foreach ($products->whereIn('category', ['switch']) as $product)
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
