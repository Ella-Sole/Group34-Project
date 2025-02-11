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

        <!-- display message for successful login -->
        @if (session()->has('success'))
            <p style="color:red"> {{session('success')}}</p>
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
        @if ($errors->has('error'))
            <p style="color:red"> {{$errors->first('error')}} </p>

        @endif
            <p>Not yet got an account? <a href = "{{ url('/signup') }}"> Sign up </a></p><br>
            <p>Forgot your password? <a href = ""> Reset Password</a> </p><br>
        </div>
    </main>
</body>
<x-footer> </x-footer>
<script src="{{ asset('/script.js') }}"></script>

</html>
