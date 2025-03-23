<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Reset Password')
</x-head>

<body class = "login-page-layout background">
       


    <x-header-navbar> </x-header-navbar>
    <main>
        <div class = "reset-password-header">
            <h1>Reset Password</h1>
        </div>
        @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
        <div class = "reset-form">
            <form action="{{ route('forget.password.post') }}" method = "POST">
                <label for = "email address">Email Address:</label><br>
                <input type = "text" id = "email_address" class = "form-control" name = "email" required autofocus><br>
                @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                 @endif
                 <button type = "submit">Send reset password link</button><br>
            </form>
        </div>

</body>
<x-footer> </x-footer>
<script src="{{ asset('/script.js') }}"></script>

</html>
