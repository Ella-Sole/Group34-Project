<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Admin: Add Product')
</x-head>


<body class = "contact-us-page-layout background">
    <x-header-navbar> </x-header-navbar>

    <main>
        <h1 class="admin-title">Add Product</h1>
        <form class="admin-addform">
            <label for="pname">Product Name:</label><br>
            <input type="text" id="pname" name="pname"><br>
            <label for="pimage">Product Image:</label>
            <input type="file" id="pimage" name="pimage">
            <label for="pcategory">Product Category:</label>
            <select id="pcategory" name="pcategory">
                <option value="ps3">ps3</option>
                <option value="ps4">ps4</option>
                <option value="xboxone">xbox one</option>
                <option value="switch">switch</option>
            </select>
            <label for="pprice">Price:</label><br>
            <input type="text" id="pprice" name="pprice">

            <label for="pstock">Stock:</label><br>
            <input type="text" id="pstock" name="pstock">

            <input type="submit" value="Add Product">
        </form>
    </main>

    <x-footer> </x-footer>

    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
