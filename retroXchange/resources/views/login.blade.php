<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Login')
</x-head>

<body class = "body-form">

    <x-header-navbar> </x-header-navbar>

    <!-- Main Content-->

    <main class = "push-elements">
        <div>
            <h1>Log In</h1>
        </div>
        <!-- Form Section-->
        <!--when form is submitted, routes to loginuser-->
        <form action="{{ route('loginUser') }}" method="POST">
            <!--csrf important for form security-->
            @csrf
            <label for="email address"> Email Address:</label><br>
            <input type="text" id="email" name="email" required><br>

            <label for="password"> Password:</label><br>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" value="Login"><br>
        </form>
        <div>
            <p>Not yet got an account?<a href = "{{ url('/signup') }}"> Sign up</a></p>
        </div>

    </main>

</body>
<x-footer> </x-footer>
<script src="{{ asset('/script.js') }}"></script>

</html>
