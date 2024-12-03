<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RetroXchange - Buy Used Games</title>
        <link rel="stylesheet" href="style.css">
        <style>
            .slideshow img {
                display: none;
                width: auto;
                height: 300px; /* Set the desired height */
                max-width: 100%; /* Ensure the image doesn't exceed the container width */
            }
            .slideshow img.active {
                display: block;
            }
        </style>
    </head>

    <body>
        <header>
            <div class="LOGO">
                <h1>RetroXchange</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="Homepage.html">Home</a></li>
                    <li><a href="AboutUs.html">About Us</a></li>
                    <li><a href="ContactUs.html">Contact Us</a></li>
                </ul>
            </nav>
            <h1>Home</h1><br>
            <a href="LoginPage.html">Login</a>
            <a href="SignUp.html">Sign Up</a>
        </header>
        
        <main>
            <section class="img-slideshow-section">
                <div class="slideshow">
                    <img src="https://upload.wikimedia.org/wikipedia/en/2/27/FIFA_16_cover.jpg" alt="FIFA 16">
                    <img src="https://m.media-amazon.com/images/I/61xRmHDWENL._AC_SX679_.jpg" alt="Call of Duty: Black Ops 4">
                    <img src="https://image.api.playstation.com/vulcan/img/rnd/202112/0215/MigPBjoiYF5q7750ZD0xDyLP.png" alt="NBA 2K22">
                    Image credits: FIFA from Wikipedia, Call of Duty from Amazon, NBA 2K22 from PlayStation.
                </div>
            </section>

            <section class="best-sellers-section">
                <h2>Best Sellers</h2>
                <p>Discover the top-rated games of the month!</p>
                <ul>
                    <li><a href="#">Game 1 - £20</a></li>
                    <li><a href="#">Game 2 - £25</a></li>
                    <li><a href="#">Game 3 - £30</a></li>
                </ul>
            </section> 
        </main>

        <footer>
            <div class="footer-content">
                <p>&copy; 2024 RetroXchange. All rights reserved</p>
                <div class="social-links">
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                    <a href="#">LinkedIn</a>
                </div>
            </div>
        </footer>

        <script>
            const slides = document.querySelectorAll('.slideshow img');
            let currentSlide = 0;

            function showNextSlide() {
                slides[currentSlide].classList.remove('active');
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].classList.add('active');
            }

            setInterval(showNextSlide, 3000);

            document.querySelectorAll('nav a').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            });

            const footer = document.querySelector('.footer-content');
            const dateElement = document.createElement('p');
            dateElement.textContent = `Current Date & Time: ${new Date().toLocaleString()}`;
            footer.appendChild(dateElement);
        </script>
    </body>
</html>
