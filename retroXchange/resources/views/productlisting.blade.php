<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Insert Product Name From Database')
</x-head>


<body class = "product-listing-layout background">
    <x-header-navbar> </x-header-navbar>

    <div class="product-listing-grid">
        <div class="product-listing-image">
            <img src = "{{ asset('images/gta5.jpg') }}">
        </div>

        <div class="product-listing-details">
            <div class="product-listing-title">
                <h1>Grant Theft Auto V (Edit The Title Here)</h1>
            </div>
            <div class="product-listing-description">
                <ul>
                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel est tincidunt, ultrices arcu varius, luctus dui. Curabitur id suscipit neque, sit amet molestie enim. Donec ullamcorper arcu turpis, nec bibendum ligula tristique a. In lacinia sapien at ligula imperdiet eleifend. </li>
                    <li>Curabitur volutpat odio et ex congue, et molestie nisi sodales. Cras sodales, nisi at gravida scelerisque, est justo finibus libero, eget hendrerit tortor nunc ut diam. Pellentesque enim sapien, tristique vitae nulla finibus, ullamcorper vestibulum nibh. Cras a ultricies tellus. </li>
                </ul>
            </div>
            <div class="product-listing-price">
                <p>£9.11</p>
            </div>
            <div class="product-listing-buy-section">
                <div>
                    <button class="" >Add to Basket</button>
                </div>
            </div>
        </div>


    </div>

    <x-footer> </x-footer>

    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
