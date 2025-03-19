<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Admin: Customer Management')
</x-head>


<body class = "contact-us-page-layout background">
    <x-header-navbar> </x-header-navbar>

    <main>
        <h1 class="admin-title">Customer Management</h1>
        <table style="width:100%">
                <tr>
                    <th>Customer ID</th>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Registration Date</th>
                    <!--<th>Order Count</th>-->
                    <!--<th>Status</th>-->
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>#C1001</td>
                    <td>Jane Doe</td>
                    <td>jane@example.com</td>
                    <td>+1234567890</td>
                    <td>123 Main St, City</td>
                    <td>2025-03-01</td>
                    <!--<td>5</td>-->
                    <!--<td>Active</td>-->
                    <td><button>Edit</button><button>Delete</button></td>
                </tr>
        </table>
    </main>

    <x-footer> </x-footer>

    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
