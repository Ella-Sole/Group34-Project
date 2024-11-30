<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width. initial-scale = 1.0">
        <title>Sign Up Page</title>
        <link rel="stylesheet" type="text/css" href="{{ url('/style.css') }}" /> <!-- Link to CSS File-->
    </head>

    <body>

        <!-- Header Section-->
         <header>
            <div class="LOGO">
                <h1> RetroXchange</h1> <!-- Placeholder for Logo-->
            </div>

            <!-- Navigation Bar-->
            <nav>
                <ul>
                    <li> <a href="{{ url('/home') }}"> Home</a></li>
                    <li> <a href="{{ url('/about') }}">About Us </a></li>
                    <li> <a href="{{ url('/contact') }}"> Contact Us</a></li>  
                            
                </ul>
            </nav>

            <h1> Sign Up </h1><br>

         </header>

         <!-- Main Content-->
         <main>
           <!-- Form Section-->
           <section class="sign-up-form-section">
                <h3> Create an account with us today!</h3>

               <label for="first name"> First Name:</label><br>
               <input type="text" id="fname" name="fname"><br>

               <label for="last name"> Last Name:</label><br>
               <input type="text" id="lname" name="lname"><br>

               <label for="street address"> Street Address:</label><br>
               <input type="text" id="streetaddress" name="streetaddress"><br>

               <label for="post code"> Post Code:</label><br>
               <input type="text" id="postcode" name="postcode"><br>

               <label for="email addreess"> Email Address:</label><br>
               <input type="text" id="email" name="email"><br>

               <label for="password"> Password:</label><br>
               <input type="password" id="password" name="password"><br>

               <label for="confirmpassword"> Confirm Password:</label><br>
               <input type="confirmpassword" id="confirmpassword" name="confirmpassword"><br>


                <input type="submit" value="sign up">

           </section>

           <!--Image Section-->
           <section class="image-section">
                <div class="image">
                    <img src="example1" style="width:200px">
                </div>
            </section>
         </main>
         
               

         <!-- Footer Section-->
          <footer>
            <div class="footer-content">
                <p> &copy 2024 RetroXchange. All rights reserved</p>
                <div class="social-links">
                    <a href="#"> Facebook</a>
                    <a href="#"> Twitter</a>
                    <a href="#"> Instagram</a>
                    <a href="#"> LinkedIn</a>
                </div>
            </div>
          </footer>
    </body>
</html>