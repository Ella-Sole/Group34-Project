<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width. initial-scale = 1.0">
        <title>Contact Us</title>
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
            <h1> Contact Us </h1><br>
         </header>

         <!-- Main Content-->
         <main>
            <!-- Form Section-->
           <section class="contact-us-form-section">
            <form>
                <lablel for="name"> Full Name:</lablel><br>
                <input type="text" id="name" name="name"><br>

                <label for="email address"> Email Address:</label><br>
                <input type="text" id="email" name="email"> <br>

                <textarea id="query" name="query" rows="10" cols="50"> 

                </textarea> <br>
                <input type="submit" value="submit">
            </form>
           </section>

           <!-- Image Section-->
           <section class="image-section">
                <div class="image">
                    <img src="example3" style="width:200px">
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