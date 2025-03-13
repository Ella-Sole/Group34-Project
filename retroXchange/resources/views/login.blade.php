<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Login')
</x-head>

<body class = "login-page-layout background">

    <x-header-navbar> </x-header-navbar>

    <main>
        <div class = "login-header">
            <h1>Log In</h1>
        </div>

        <!-- display message for errors -->
        @if (session()->has('error'))
            <h1 style="color:red" align="center"> {{session('error')}}</h1>
        @endif

        <!--display message for successful signup-->
        @if (session()->has('success'))
            <h1 style="color:red" align="center"> {{session('success')}}</h1>
        @endif
        
        <!--when form is submitted, routes to loginuser-->
        <div class = "login-form">
            <form action="{{ route('loginUser') }}" method="POST">
                <!--csrf important for form security-->
                @csrf
                <label for="email address"> Email Address:</label><br>
                <input type="text" id="email" name="email" required><br>

                <label for="password"> Password:</label><br>
                <input type="password" id="password" name="password" required><br>

                <input type="submit" value="Login"><br>
            </form>

        </div>

        <div class="account-option">
            <p>Not yet got an account? <a href = "{{ url('/signup') }}"> Sign up</a></p>
        </div>
    </main>
</body>
<x-footer> </x-footer>
<script src="{{ asset('/script.js') }}"></script>

</html>
