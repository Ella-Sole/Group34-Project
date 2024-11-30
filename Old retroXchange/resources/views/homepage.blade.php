<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width. initial-scale = 1.0">
        <title>RetroXchange - Buy Used Games</title>
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

            <h1> Home </h1><br>
            <!-- Login and Sign in links-->
             <a href="{{ url('/login') }}"> Login</a>
             <a href="{{ url('/signup') }}"> Sign Up</a>
         </header>
         <main>
            <!-- Image Slideshow-->
            <section class="img-slideshow-section">

                    <!-- Images with caption text-->
                    <div class="slideshow">
                        <img src="img1.jpg" alt="Image 1">
                        <img src="img2.jpg" alt="Image 2">
                        <img src="img3.jpg" alt="Image 3">
                        <img src="img4.jpg" alt="Image 4">
                    </div>

                      
            </section>

            <!-- Best Sellers Section-->
            <section class="best-sellers-section">
                <!-- Any ideas for what we could put here would be appreciated-->
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