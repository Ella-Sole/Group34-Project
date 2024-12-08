<!DOCTYPE html>
<html lang="en">
    <x-head>
        @section('title', "Login")
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
            <p>Not yet got an account?<a href = "{{url('/signup')}}"> Sign up</a></p>
           </div>
               
</main>
         <!-- Footer Section-->
          <footer>
            <div class="footer-grid-content">
                <p> &copy 2024 RetroXchange. All rights reserved</p>
                <div>
                <nav class = "navigation-bar">
                    <div class = "navbar-item-login">
                    <a href="#"> <img src = "{{asset('images/facebook.jpg')}}"> Facebook</a>
                    </div>
                    <div class = "navbar-item-login">
                    <a href="#"><img src = "{{asset('images/twitter.png')}}"> Twitter</a>
                    </div>
                    <div class = "navbar-item-login">
                    <a href="#"><img src = "{{asset('images/thegram.jpg')}}"> Instagram</a>
                    </div>
                    <div class = "navbar-item-login">
                    <a href="#"><img src = "{{asset('images/linked.png')}}"> LinkedIn</a>
                    </div>
                </nav>
            </div>
          </footer>
    </body>
</html>
