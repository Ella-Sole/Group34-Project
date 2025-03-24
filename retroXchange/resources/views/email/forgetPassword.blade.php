<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Reset Password')
</x-head>

<body class = "login-page-layout background">

    <x-header-navbar> </x-header-navbar>

    <main>
    <h1>Forget Password Email</h1>
   
   You can reset your password from the link:
   <a href="{{ route('reset.password.get', $token) }}">Reset Password</a>	
    </main>
</body>
<x-footer> </x-footer>
<script src="{{ asset('/script.js') }}"></script>

</html>
