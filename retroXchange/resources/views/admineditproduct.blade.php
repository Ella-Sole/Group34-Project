<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Admin: Edit Product')
</x-head>


<body class = "contact-us-page-layout background">
    <x-header-navbar> </x-header-navbar>

    <main>
        <h1 class="admin-title">Edit Product</h1>

        <!--for displaying error message if validation fails-->
        @if (session()->has('error'))
            <h1 style="color:red" align="center"> {{session('error')}}</h1>
        @endif
        
        <form class="admin-addform" method="post" action="{{ route ('editproduct') }}">
            @csrf
            
            <label for="pname">Product Name:</label><br>
            <input type="text" id="pname" name="pname" value="{{ $product->item_name }}"><br>
            <label for="pimage">Product Image Code:</label>
            <input type="text" id="pimage" name="pimage" value="{{ $product->item_image }}">
            <label for="pcategory">Product Category:</label>
            <select id="pcategory" name="pcategory" selected="{{ $product->category }}">
                <option value="ps3">PlayStation 3</option>
                <option value="ps4">PlayStation 4</option>
                <option value="xbox one">Xbox One</option>
                <option value="xbox 360">Xbox 360</option>
                <option value="switch">Switch</option>
            </select>
            <label for="pdescription">Product Description:</label>
            <input type="text" id="pdescription" name="pdescription" value="{{ $product->item_description }}"><br>
            <label for="pprice">Price:</label><br>
            <input type="number" step="0.01" min="0" id="pprice" name="pprice" value="{{ $product->item_price }}">

            <label for="pstock">Stock:</label><br>
            <input type="number" step="1" min="0" id="pstock" name="pstock" value="{{ $product->item_stock }}">
            <!--current product id also passed in as hidden input-->
            <input type="hidden" name="pid" value="{{ $product->item_id }}">

            <input type="submit" value="Update Product">
        </form>
    </main>

    <x-footer> </x-footer>

    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
