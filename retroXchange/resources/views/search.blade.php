<!DOCTYPE html>
<html lang="en">

<x-head>
    @section('title', 'retroXchange')
</x-head>

<body class="background page-layout">
    <x-header-navbar> </x-header-navbar>
        


    <main>
        <section class="products">
            <h2 class="product-category">Games</h2>
            <x-product-card-buttons />
            <div class="product-container">

                <!-- Products -->
                <!-- class that holds individual products-->
                <!--loop through the array $products, each element being a variable $product-->
                <!-- if no products are found, an error message is displayed -->
            @if ($products-> isNotEmpty())
                @foreach ($products as $product)
                <x-product-card :product="$product" />
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
