<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Consoles')
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
        <section class="products">
            <h2 class="product-category">Games</h2>
            <x-product-card-buttons />
            <!-- class that holds all products-->
            <div class="product-container">
                @foreach ($products->whereIn('category', ['ps3 console', 'ps4 console', 'xbox one console', 'xbox 360 console', 'switch console', 'wii console']) as $product)
                <x-product-card :product="$product"/>
                @endforeach
            </div>
        </section>
    </main>
    <x-footer> </x-footer>
    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
