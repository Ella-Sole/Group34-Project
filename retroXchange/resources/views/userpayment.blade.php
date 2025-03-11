<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'User Payment')
</x-head>
<body>
     <x-header-navbar> </x-header-navbar>
    <div class="container">
        <h2 class="title">Profile Settings</h2>
        <input class="input-field" id="name" type="text" placeholder="Full Name">
        <input class="input-field" id="email" type="email" placeholder="Email">
        <button class="btn btn-primary" onclick="updateProfile()">Update</button>

        <h2 class="title">Payment Preferences</h2>
        <div id="payment-list">
            <div class="payment-preferences">
                <span>Visa - **** 6825</span>
                <button class="button button-fail" onclick="removePayment(this)">Remove</button>
            </div>
        </div>
        <button class="button button-success" onclick="createPayment()">Create a payment</button>

        <button class="button button-fail" onclick="removeProfile()">Remove Profile</button>
    </div>


</body>
</html>
