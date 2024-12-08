<!DOCTYPE html>
<html lang="en">
    <x-head>
        @section('title', "Contact Us")
    </x-head>

    <body class = "body-form">
        <x-header-navbar> </x-header-navbar>
         <!-- Main Content-->
         <main class = "push-elements">
             <div class = "center-header">
            <h1>Contact Us</h1>
             </div>
            <!-- Form Section-->
           <section class="center-form">
            <form>
                <label for="name"> Full Name:</lablel><br>
                <input type="text" id="name" name="name"><br>

                <label for="email address"> Email Address:</label><br>
                <input type="text" id="email" name="email"> <br>
                <label for = "query">Your Query:</label>
                <textarea id="query" name="query" rows="10" cols="40"> 

                </textarea> <br>
                <input type="submit" value="submit">
            </form>
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
