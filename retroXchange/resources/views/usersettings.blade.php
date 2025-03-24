<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Settings')
</x-head>


    <body class = "contact-us-page-layout background">
        <x-header-navbar> </x-header-navbar>
        
        <main>
        <h1 class="admin-title">Settings</h1>

        <form>

            <label for="name">Change Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter new name">
            <button type="submit" name="action" value="change_name">Update Name</button>

            <br><br>

            <label for="email">Change Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter new email">
            <button type="submit" name="action" value="change_email">Update Email</button>

            <br><br>

            <label for="password">Change Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter new password">
            <button type="submit" name="action" value="change_password">Update Password</button>

            <br><br>

            <label for="payment">Change Payment Method:</label>
            <input type="text" id="card_number" name="card_number" placeholder="Enter new card number">
            <button type="submit" name="action" value="change_payment">Update Payment Method</button>

            <br><br>

            <button type="submit" name="action" value="delete_account" style="background-color: red; color: white;">
                Delete Account
            </button>
        </form>
    </main>


        <x-footer> </x-footer>


    <script src="{{ asset('/script.js') }}"></script>
    </body>

</html>
