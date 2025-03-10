<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Login')
</x-head>

<body class = "login-page-layout background">
       


    <x-header-navbar> </x-header-navbar>
    <main>
        <div class = "reset-password-header">
            <h1>Reset Password</h1>
        </div>
        <div class = "reset-form">
            <form action="{{ route('reset') }}" method = "POST">
                <label for = "email address">Email Address:</label><br>
                <input type = "text" id = "email" name = "email" required><br>
                <label for = "new password">New Password:</label><br>
                <input type = "password" id ="new password" name = "new password" required><br>
                <input type = "submit" value = "Reset"><br>
            </form>
        </div>

</body>
<x-footer> </x-footer>
<script src="{{ asset('/script.js') }}"></script>

</html>
