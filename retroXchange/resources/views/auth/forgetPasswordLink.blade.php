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

        <div class = "reset-form">
            <form action="{{ route('reset.password.post') }}" method = "POST">
                <input type = "hidden" name = "token" value = "{{ token }}">
                <label for = "email_address">Email Address:</label><br>
                <input type = "text" id = "email_address" class = "form-control" name = "email" required autofocus><br>
                @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                 @endif
                 <label for = "password">Password:</label><br>
                 <input type = "password" id = "password" class = "form-control" name = "password" required autofocus>
                 @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                <label for = "password_confirm">Confirm Password:</label>
                <input type = "password" id = "password_confirm" class = "form-control" name = "password_confirm" required autofocus>
                @if ($errors->has('password_confirmation'))
                                      <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                  @endif
                <button type = "submit">Reset Password</button><br>

            </form>
        </div>

</body>
<x-footer> </x-footer>
<script src="{{ asset('/script.js') }}"></script>

</html>
