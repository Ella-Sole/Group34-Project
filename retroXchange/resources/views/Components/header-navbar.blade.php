<header>
    <div class="header-grid-layout">
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="3.8rem" height="3.9rem" fill="currentColor"
                        class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                    </svg></a>
            </button>

            <div id="myDropdown" class="dropdown-content">
                <a href="javascript:void(0);" onclick="toggleDropdown(event, 'productsDropdown')">Products</a>
                <div id="productsDropdown" class="dropdown-content2">
                    <a href="javascript:void(0);" onclick="toggleDropdown(event, 'gamesDropdown')">Games</a>
                    <div id="gamesDropdown" class="dropdown-content3">
                        <a href="#">PlayStation Games</a>
                        <a href="#">Xbox Games</a>
                        <a href="#">Switch Games</a>
                    </div>
                    <a href="javascript:void(0);" onclick="toggleDropdown(event, 'consolesDropdown')">Consoles</a>
                    <div id="consolesDropdown" class="dropdown-content3">
                        <a href="#">PlayStation Consoles</a>
                        <a href="#">Xbox Consoles</a>
                    </div>
                </div>
                <a href="javascript:void(0);" onclick="toggleDropdown(event, 'settingsDropdown')">Settings</a>
                <div id="settingsDropdown" class="dropdown-content2">
                    <a href="#">Dark Mode</a>
                </div>
            </div>
        </div>
        <div class="logo-div">
            <img src="{{ asset('images/logo.png') }}" alt="retroxchange-logo" class="retroxchange-logo">
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
            <a href="{{ url('/basket') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="1.7rem" height="2rem" fill="currentColor"
                    class="bi bi-basket3-fill" viewBox="0 0 16 16">
                    <path
                        d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.468 15.426.943 9h14.114l-1.525 6.426a.75.75 0 0 1-.729.574H3.197a.75.75 0 0 1-.73-.574z" />
                </svg>
            </a>
        </div>
        <div class="login-icon">
            <a href="{{ url('/login') }}">
                <!-- This SVG was obtained from the bootstrap website -->
                <svg xmlns="http://www.w3.org/2000/svg" width="2.5rem" height="2.5rem" fill="currentColor"
                    class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg>
            </a>
        </div>

        <!-- Navigation Bar-->
        <div class="navigation-bar-flexbox">
            <nav class=navigation-bar>
                <div class="navbar-item">
                    <a href="{{ url('/') }}">HOME</a>
                </div>
                <div class="navbar-item">
                    <a href="{{ url('/products') }}">GAMES</a>
                </div>
                <div class="navbar-item">
                    <a href="#">CONSOLES</a>
                </div>
                <div class="navbar-item">
                    <a href="{{ url('/about') }}">ABOUT US</a>
                </div>
                <div class="navbar-item">
                    <a href="{{ url('/contact') }}">CONTACT US</a>
                </div>
                <!--display log out option if the user is logged in-->
                
                <div class="navbar-item">
                    <a href="{{ url('/logout') }}">LOG OUT</a>
                </div>  
                
                
            </nav>
        </div>
    </div>
</header>
