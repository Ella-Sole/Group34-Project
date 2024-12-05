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
                <img src="Images/logo.png" alt="LOGO"/>
            </div>


            <!-- Navigation Bar-->
            <nav>
                <ul>
                    <li> <a href="{{ url('/') }}"> Home</a></li>
                    <li> <a href="{{ url('/about') }}">About Us </a></li>
                    <li> <a href="{{ url('/contact') }}"> Contact Us</a></li>

                </ul>
            </nav>


            <h1> Sign Up </h1><br>

            <label for="first name">First name</label>
            <input type="text" id="username" name="username" placehoder ="first name"><br><br>

            <label for="last name">Last name</label>
            <input type="text" id="username" name="username" placehoder ="last name"><br><br>

            <label for="street address">Street Address</label>
            <input type="text" id="username" name="username" placehoder ="Street Address"><br><br>

            <label for="post code">Post Code</label>
            <input type="text" id="username" name="username" placehoder ="Post Code"><br><br>

            <label for="email address">email address</label>
            <input type="text" id="username" name="username" placehoder ="email address"><br><br>

            <label for="card details">card details</label>
            <input type="text" id="username" name="username" placehoder ="card details"><br><br>


         </header>


         <!-- Main Content-->
         <main>
        <h1> Checkout </h1>

            
        <h1> Shipping info</h1>


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