<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width. initial-scale = 1.0">
        <title>Log-in</title>
        <link rel="stylesheet" href="{{asset('/style.css')}}"> <!-- Link to CSS File-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    
    </head>

    <body class = "body-form">

        <x-header-navbar> </x-header-navbar>

         <!-- Main Content-->

         <main class = "push-elements">
            <div>
                <h1>Log In</h1>
            </div>
           <!-- Form Section-->
           <form action="{{asset('/handlelogin.php')}}" method="POST">
            @csrf
            <label for="email address"> Email Address:</label><br>
            <input type="text" id="email" name="email" required><br>
        
            <label for="password"> Password:</label><br>
            <input type="password" id="password" name="password" required><br>
        
            <input type="submit" value="Login"><br>
        </form>
            <!--
           <div>
                <label for="email address"> Email Address:</label><br>
                <input type="text" id="email" name="email"><br>

                <label for="password"> Password:</label><br>
                <input type="password" id="password" name="password"><br>

                <input type="submit" value="login" ><br>
                -->
           </div>
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
