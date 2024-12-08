<!DOCTYPE html>
<html lang="en">
    <x-head>
        @section('title', "Sign Up!")
    </x-head>

    <body class = "body-form">
        <x-header-navbar> </x-header-navbar>
         <!-- Main Content-->
    <main class="push-elements">
        <!-- Form Section-->
        <div class = 'center-header'>
        <h1>Sign Up Today!</h1>
        </div>
        <section class="center-form">


             <!-- Start of the form -->
             <form action="{{route('register')}}" method="POST">
                @csrf
                <input type="hidden" name="submitted" value="1">

                <!-- Email Input -->
                <label for="email">Email Address:</label><br>
                <input type="email" id="email" name="email" required><br>

                <!-- Password Input -->
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br>

                <!-- Confirm Password Input -->
                <label for="confirm-password">Confirm Password:</label><br>
                <input type="password" id="confirm-password" name="confirm-password" required><br>

                <!-- Submit Button -->
                <input type="submit" value="Sign Up">
            <p> Already got an account? <a href="{{url('/login')}}">Log in</a></p>

            <!-- SIGNUP PAGE DOES NOT NEED THIS INFORMATION, IT SHOULD BE OPTIONAL LATER IN SETTINGS OR WHEN BUYING-->
            <!-- <label for="first name"> First Name:</label><br>
               <input type="text" id="fname" name="fname"><br>

               <label for="last name"> Last Name:</label><br>
               <input type="text" id="lname" name="lname"><br>

               <label for="street address"> Street Address:</label><br>
               <input type="text" id="streetaddress" name="streetaddress"><br>

               <label for="post code"> Post Code:</label><br>
               <input type="text" id="postcode" name="postcode"><br> -->

          <!----  <label for="email address"> Email Address:</label><br> 
            <input type="text" id="email" name="email"><br>

            <label for="password"> Password:</label><br>
            <input type="password" id="password" name="password"><br>

            <label for="confirmpassword"> Confirm Password:</label><br>
            <input type="confirmpassword" id="confirmpassword" name="confirmpassword"><br>
             

            <input type="submit" value="sign up"><br>
             -->


        </section>

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
