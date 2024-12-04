<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width. initial-scale = 1.0">
        <title>About us</title>
        <link rel="stylesheet" href="{{asset('/style.css')}}"> <!-- Link to CSS File-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
    
    </head>

    <body class = "body-form">

        <!-- Header Section-->
        <header>
            <!-- Header Section-->
             <div class = "header-grid-layout">
                <div class="side-menu">
                    <!-- This SVG was obtained from the bootstrap website -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" fill="currentColor"
                        class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                    </svg></a>
                </div>
                <div class="logo-div">
                    <img src="{{asset('images/logo.png')}}" alt="retroxchange-logo" class="retroxchange-logo">
                </div>
                <div class="search-bar-placement">
                    <div class="search-bar-temp">
                        <p>Temporary Searchbar Placeholder</p>
                        <!-- This SVG was obtained from the bootstrap website -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                    </div>
                </div>
                <div class="basket-icon">
                    <a href="{{url('/basket')}}"></a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.7rem" height="2rem" fill="currentColor"
                        class="bi bi-basket3-fill" viewBox="0 0 16 16">
                        <path
                            d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.468 15.426.943 9h14.114l-1.525 6.426a.75.75 0 0 1-.729.574H3.197a.75.75 0 0 1-.73-.574z" />
                    </svg>
                </div>
                <div class="login-icon">
                    <a href="{{url('/login')}}"></a>
                    <!-- This SVG was obtained from the bootstrap website -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" fill="currentColor"
                        class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                    </svg>
                    </div>
    
                <!-- Navigation Bar-->
                 <div class = "navigation-bar-flexbox">
                 <nav class=navigation-bar>
                <div class="navbar-item">
                    <a href="{{url('/')}}">HOME</a>
                    </div>
                    <div class="navbar-item">
                        <a href="{{url('/products')}}">GAMES</a>
                    </div>
                    <!--<div class="navbar-item">
                        <a href="#">CONSOLES</a>
                    </div>-->
                    <div class="navbar-item">
                        <a href="{{url('/about')}}">ABOUT US</a>
                    </div>
                    <div class="navbar-item">
                        <a href="{{url('/contact')}}">CONTACT US</a>
                    </div>
                </nav>
                </div>
                </div>
    
    
             </header>

    <!-- Mostly Jeremiah's Work, Heavily Edited by Igors -->
    <main class="about-us-body">
        <div class="about-us-logo">
            <img src="assets/images/logo.png" alt="retroxchange-logo">
        </div>

        <div class="about-us-company-story about-us-box-style">
            <section>
                <h2>Our Story</h2>
                <p>Founded in 2024, RetroXchange started with a goal to provide the best online experience for selling
                    used games</p>
            </section>
        </div>


        <div class="about-us-company-values about-us-box-style">
            <section>
                <h2> Our Values</h2>
                <ul>
                    <li> <strong> Customer First</strong>: We prioritise our customers in everything we do</li>
                    <li> <strong> Quality </strong>: We strive to offer the best products</li>
                    <li> <strong> Integrity </strong>: We conduct our business with honesty and transparency</li>
                    <li> <strong> Innovation </strong>: We constantly seek ways to improve and evolve</li>
                    <li> <strong> Community </strong>: We give back and engage with the communities we serve</li>
                </ul>
            </section>
        </div>

        <div class="team-heading about-us-box-style">
            <h2>Meet Our Team</h2>
        </div> 

        <div class="about-us-team-members">
            <div class="team-member about-us-box-style">
                <h3> Jeremiah Kibuuka</h3>
                <p> UX/UI Engineer</p>
            </div>

            <div class="team-member about-us-box-style">
                <h3> Simran Chahal</h3>
                <p> UX/UI Engineer</p>
            </div>


            <div class="team-member about-us-box-style">
                <h3> Fahim Suhag</h3>
                <p> Frontend Engineer </p>
            </div>

            <div class="team-member about-us-box-style">
                <h3> Viviene Nkwopara</h3>
                <p> Frontend Engineer</p>
            </div>

            <div class="team-member about-us-box-style">
                <h3> Yasser Saeed</h3>
                <p> Frontend Engineer</p>
            </div>


            <div class="team-member about-us-box-style">
                <h3> Igors Nazarovs</h3>
                <p> Backend Engineer</p>
            </div>

            <div class="team-member about-us-box-style">
                <h3> Ella Sole</h3>
                <p> Backend Engineer</p>
            </div>

            <div class="team-member about-us-box-style">
                <h3> Sidra Jabeen</h3>
                <p> Backend Engineer</p>
            </div>
            <div class="team-member about-us-box-style">
                <h3> Jubril Mustapha</h3>
                <p> Backend Engineer</p>
            </div>
        </div>

        <!-- THERES NO NEED FOR THIS RIGHT NOW -->
        <!-- Images Section-->
        <!-- <section clas="images-section2">
            <div class="images-container">

                <div class="image">
                    <img src="example1">
                </div>
                <div class="image">
                    <img src="example1">
                </div>

                <div class="image">
                    <img src="example3">
                </div>

                <div class="image">
                    <img src="example3">
                </div>
            </div> -->
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