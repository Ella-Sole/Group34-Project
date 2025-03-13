<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Sign Up!')
</x-head>

<body class = "signup-page-layout background">
    <x-header-navbar> </x-header-navbar>
        


    <main>

        <div class = "signup-header">
            <h1>Sign Up</h1>
        </div>

        <!-- display message for errors -->
        @if (session()->has('error'))
            <h1 style="color:red" align="center"> {{session('error')}}</h1>
        @endif

        <div class = "signup-form">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <input type="hidden" name="submitted" value="1">

                <label for="email">Email Address:</label><br>
                <input type="email" id="email" name="email" required><br>

                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br>

                <label for="confirm-password">Confirm Password:</label><br>
                <input type="password" id="confirm-password" name="confirm-password" required><br>

                <input type="submit" value="Sign Up">
            </form>
        </div>
        
        <div class="account-option">
            <p> Already got an account? <a href="{{ url('/login') }}">Log in</a></p>
        </div>
    </main>
    <x-footer> </x-footer>
    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
