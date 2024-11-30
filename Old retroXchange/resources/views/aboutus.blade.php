<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width. initial-scale = 1.0">
        <title>About Us</title>
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
            <h1> About Us </h1><br>
         </header>

         <!-- Main Content-->
         <main>

            <!-- Comapany Story Section-->
            <section class="comany-story-section">
                <h2> Our Story</h2>
                <p> Founded in 2024, RetroXchange started with a goal to provide the best online experience for selling used games.</p>
            </section>
            
            <!-- Company Values-->
            <section class="values">
                <h2> Our Values</h2>
                <ul>
                    <li> <strong> Customer First</strong>: We prioritise our customers in everything we do.</li>
                    <li> <strong> Quality </strong>: We strive to offer the best products.</li>
                    <li> <strong>Integrity </strong>: We conduct our business with honesty and transparency</li>
                    <li> <strong> Innovation </strong>: We constantly seek ways to improve and evolve.</li>
                    <li> <strong>Community </strong>: We give back and engage with the communities we serve.</li>
                </ul>
            </section>

            <!-- Our Team Section-->
             <section class="our-team-section">
                <h2> Meet Our Team</h2>
                <!-- UX/UI Engineer-->
                <div class="team-member">
                    <h3> Jeremiah Kibuuka</h3>
                    <p> UX/UI Engineer</p>
                </div>

                <div class="team-member">
                    <h3> Simran Chahal</h3>
                    <p> UX/UI Engineer</p>
                </div>

                <!-- Frontend Engineer-->
                <div class="team-member">
                    <h3> Fahim Suhag</h3>
                    <p> Frontend Engineer </p>
                </div>

                <div class="team-member">
                    <h3> Viviene Nkwopara</h3>
                    <p> Frontend Engineer</p>
                </div>

                <div class="team-member">
                    <h3> Yasser Saeed</h3>
                    <p> Frontend Engineer</p>
                </div>

                <!-- Backend Engineer-->
                <div class="team-member">
                    <h3> Igors Nazarovs</h3>
                    <p> Backend Engineer</p>
                </div>

                <div class="team-member">
                    <h3> Ella Sole</h3>
                    <p> Backend Engineer</p>
                </div>

                <div class="team-member">
                    <h3> Sidra Jabeen</h3>
                    <p> Backend Engineer</p>
                </div>
                <div class="team-member">
                    <h3> Jubril Mustapha</h3>
                    <p> Backend Engineer</p>
                </div>
                
             </section>

             <!-- Images Section-->
             <section clas="images-section">
                <div class="images-container">

                    <div class="image">
                        <img src="example1" style="width:200px">
                    </div>
                    <div class="image">
                        <img src="example1" style="width:200px">
                    </div>

                    <div class="image">
                        <img src="example3" style="width:200px">
                    </div>

                    <div class="image">
                        <img src="example3" style="width:200px">
                    </div>
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