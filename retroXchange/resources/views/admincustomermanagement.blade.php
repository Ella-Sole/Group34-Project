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

        <!--message that will display for successful customer details update/delete -->
        @if (session()->has('success'))
            <h2 style="color:red" align="center"> {{session('success')}}</h2>
        @endif
            
        @foreach($users as $u)
                <tr>
                    <th>Customer ID</th>
                    <th>Email Address</th>
                    <th>Registration Date</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>#{{$u['id']}}</td>
                    <td>{{$u['email']}}</td>
                    <td>{{$u['created_at']}}</td>
                    
                    <td>
                        <a href = "{{ url('admineditcustomer/' . $u->id) }}">
                            <button>View/Update Details</button>
                        </a>

                        <a href = "{{ url('admindeletecustomer/' . $u->id) }}">
                            <button>Delete</button>
                        </a>
                        
                    </td>
                </tr>

        @endforeach
        </table>
    </main>

    <x-footer> </x-footer>

    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
