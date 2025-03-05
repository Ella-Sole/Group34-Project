<!DOCTYPE html>
<html lang="en">

<x-head>
    @section('title', 'About Us')
</x-head>



<body class = "about-us-page-layout background">

    <x-header-navbar> </x-header-navbar>

    <!-- Mostly Jeremiah's Work, Heavily Edited by Igors -->
    <main class="about-us-body">
        <div class="about-us-logo">
            <img src="{{ asset('images/logo.png') }}" alt="retroxchange-logo">
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


    <x-footer> </x-footer>
    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
