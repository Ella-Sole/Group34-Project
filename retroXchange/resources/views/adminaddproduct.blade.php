<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Admin: Add Product')
</x-head>


<body class = "contact-us-page-layout background">
    <x-header-navbar> </x-header-navbar>

    <main>
        <h1 class="admin-title">Add Product</h1>

        <!--for displaying error message if validation fails-->
        @if (session()->has('error'))
            <h1 style="color:red" align="center"> {{session('error')}}</h1>
        @endif

        <form class="admin-addform" method="post" action="{{ route ('addproduct') }}">
            @csrf
            <label for="pname">Product Name:</label><br>
            <input type="text" id="pname" name="pname"><br>
            <!--product images are stored and accessed by their amazon image code-->
            <label for="pimage">Product Image Code:</label>
            <!--<input type="file" id="pimage" name="pimage">-->
            <input type="text" id="pimage" name="pimage">
            <label for="pcategory">Product Category:</label>
            <select id="pcategory" name="pcategory">
                <option value="ps3">PlayStation 3</option>
                <option value="ps4">PlayStation 4</option>
                <option value="xbox one">Xbox One</option>
                <option value="xbox 360">Xbox 360</option>
                <option value="switch">Switch</option>
            </select>
            <label for="pdescription">Product Description:</label>
            <input type="text" id="pdescription" name="pdescription"><br>
            <label for="pprice">Price:</label><br>
            <input type="number" step="0.01" min="0" id="pprice" name="pprice">

            <label for="pstock">Stock:</label><br>
            <input type="number" step="1" min="0" id="pstock" name="pstock">

            <input type="submit" value="Add Product">
        </form>
    </main>

    <x-footer> </x-footer>

    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
