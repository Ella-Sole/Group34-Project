<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Admin: Inventory')
</x-head>


<body class = "contact-us-page-layout background">
    <x-header-navbar> </x-header-navbar>

    
    <main>
        <h1 class="admin-title">Inventory</h1>

        <!--message that will display for successful addition/edit/deletion of product -->
        @if (session()->has('success'))
            <h2 style="color:red" align="center"> {{session('success')}}</h2>
        @endif

        <!--search products within the inventory page itself-->
        <div class="search-bar-placement">
            <div class="search-bar-background">
                <form action="{{ route('searchInventory') }}" method="GET">
                    <div class="search-bar-alignment">
                        <div class="search-bar-input">
                            <input type="text" name="search" placeholder="Search inventory by product title or category"/>
                        </div>
                        <div class="search-bar-button">
                            <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg></button>
                        </div>
                    </div>
                </form>
            </div>
        </div><br><br>


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
                <th>Description</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>{{ $p['item_id'] }}</td>
                <td><img src="{{ url('https://m.media-amazon.com/images/I/' . $p->item_image . '.jpg') }}" height=100 width=80></img></td>
                <td>{{ $p['item_name'] }}</td>
                <td>{{ $p['category' ]}}</td>
                <td>£{{ $p['item_price'] }}</td>
                <td>{{ $p['item_stock'] }}</td>
                <td>{{ $p['item_description'] }}</td>
                <td>
                    <a href = "{{ url('admineditproduct/' . $p->item_id) }}">
                    <button>Edit</button>
                    </a>
                    <a href = "{{ url('admindeleteproduct/' . $p->item_id) }}">
                    <button>Delete</button>
                    </a>
                </td>
            </tr>
            <tr>
        @endforeach

          </table>
    </main>

    <x-footer> </x-footer>

    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
