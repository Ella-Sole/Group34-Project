<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Admin: Order Management')
</x-head>


<body class = "contact-us-page-layout background">
    <x-header-navbar> </x-header-navbar>

    <main>
        <h1 class="admin-title">Order Management</h1>
        <table style="width:100%">

        @foreach($histories as $h)

            @foreach($purchasedItems as $p)

                <!--get a singular order-->
                @if($p['purchase_id'] == $h['purchase_id'])

                    @foreach($products as $product)
                        
                        @if($p['item_id'] == $product['item_id'])
                        <tr>
                            <th>Order ID</th>
                            <th>Customer ID</th>
                            <th>Email</th>
                            <th>Order Date</th>
                            <th>Item Ordered</th>
                            <th>Item Price</th>
                            <th>Order Total</th>
                            <th>Item Status</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>#{{ $h['purchase_id'] }}</td>
                            <td>#{{ $h['users_id'] }}</td>
                            <!--get email associated with Customer/User ID-->
                            @foreach($users as $u)
                                @if($u['id'] == $h['users_id'])
                                    <td>{{ $u['email'] }}</td>
                                @endif
                            @endforeach
                            <td>{{ $h['date_of_purchase'] }}</td>
                            <td>{{ $product['item_name'] }}</td>
                            <td>£{{ $product['item_price'] }}</td>
                            <td>£{{ $h['total_price'] }}</td>
                            <td>{{ $p['purchase_status'] }}</td>
                            <td><button>Process</button></td>
                        </tr>
                        @endif
                        
                    @endforeach
                @endif
            @endforeach
        @endforeach
        </table>
        
    </main>

    <x-footer> </x-footer>

    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
