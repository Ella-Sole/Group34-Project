<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Admin: Inventory')
</x-head>


<body class = "contact-us-page-layout background">
    <x-header-navbar> </x-header-navbar>

    
    <main>
        <h1 class="admin-title">Inventory</h1>
        <a href = "{{url('/adminaddproduct')}}">
        <button class="admin-addbtn">Add New</button>
        </a>
        <table style="width:100%">

        @foreach ($products as $p)
            <tr>
                <th>Product ID</th>
                <th>Image</th>
                <th>Product Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Stock</th>
                <!--<th>Amount Sold</th>-->
                <th>Actions</th>
            </tr>
            <tr>
                <td>{{ $p['item_id'] }}</td>
                <td><img src="{{ url('https://m.media-amazon.com/images/I/' . $p->item_image . '.jpg') }}" height=100 width=80></img></td>
                <td>{{ $p['item_name'] }}</td>
                <td>{{ $p['category' ]}}</td>
                <td>£{{ $p['item_price'] }}</td>
                <td>{{ $p['item_stock'] }}</td>
                <!--<td>40</td>-->
                <td><button>Edit</button><button>Delete</button></td>
            </tr>
            <tr>
        @endforeach

          </table>
    </main>

    <x-footer> </x-footer>

    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
