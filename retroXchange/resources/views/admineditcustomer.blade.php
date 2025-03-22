<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Admin: Edit Customer')
</x-head>


<body class = "contact-us-page-layout background">
    <x-header-navbar> </x-header-navbar>

    <main>
        <h1 class="admin-title">Customer Details</h1>

        <!--for displaying error message if validation fails-->
        @if (session()->has('error'))
            <h2 style="color:red" align="center"> {{session('error')}}</h2>
        @endif
        
        <form class="admin-addform" method="post" action="{{ route ('updatedetails') }}">
            @csrf
            
            <label for="email">Email Address:</label><br>
            <input type="email" id="email" name="email" required value="{{ $user->email }}"><br>

            <label for="fname">First Name:</label><br>
            <input type="text" id="fname" name="fname" value="{{ $personaldetails->first_name }}"><br>

            <label for="mname">Middle Name:</label><br>
            <input type="text" id="mname" name="mname" value="{{ $personaldetails->middle_name }}"><br>

            <label for="lname">Last Name:</label><br>
            <input type="text" id="lname" name="lname" value="{{ $personaldetails->last_name }}"><br>

            <label for="phone">Phone Number:</label><br>
            <input type="number" id="phone" name="phone" value="{{ $personaldetails->phone_number }}">

            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address" value="{{ $personaldetails->address }}"><br>

            <label for="postcode">Postcode:</label><br>
            <input type="text" id="postcode" name="postcode" value="{{ $personaldetails->postcode }}"><br>


            <!--current user id also passed in as hidden input-->
            <input type="hidden" name="id" value="{{ $user->id }}">
            <input type="hidden" name="detailsid" value="{{ $personaldetails->personal_details_id }}">

            <input type="submit" value="Update">
        </form>
    </main>

    <x-footer> </x-footer>

    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
