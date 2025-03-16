<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Admin: Management')
</x-head>


<body class = "contact-us-page-layout background">
    <x-header-navbar> </x-header-navbar>

    <main>
        <h1 class="admin-title">Order Management</h1>
        <table style="width:100%">
                <tr>
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Order Date</th>
                    <th>Items Ordered</th>
                    <th>Total Amount</th>
                    <th>Order Status</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>#12345</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                    <td>2025-03-13</td>
                    <td>Red Dead Redemption, Fallout 4</td>
                    <td>$120.00</td>
                    <td>Processing</td>
                    <td><button>Edit</button><button>Delete</button></td>
                </tr>
        </table>
        
    </main>

    <x-footer> </x-footer>

    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
