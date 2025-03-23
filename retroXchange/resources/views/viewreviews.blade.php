<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Reviews for ...')
</x-head>

<body class = "user-reviews-layout background">
    <x-header-navbar> </x-header-navbar>


    <main>
        <section class="user-reviews-section">
            <div class="user-reviews-heading">
                <!-- Ideally get the title from the data from the db and paste it here, also to get to this page, ideally should be similar to <a href = "{ url('productview/' . $product->item_id) }"> where the index decides the review page -->
                <h2 class="user-reviews-heading">Reviews for ...</h2>

                <!-- just realised but the write review is too generic, it wont know which game the review is written for, so backend for that is also required -->
                <a href="{{ url('/reviewproduct') }}">REVIEW THIS GAME</a>
            </div>
            
            
            <div class="review-container">
                <!-- Should be looped from the database -->
                <div class="written-review">
                    <div class="review-rating">&#9733 &#9733 &#9733</div>
                    <div class="review-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras finibus in justo sed vestibulum. Nunc in risus non tellus porta pretium. Mauris nec dolor sem. Phasellus quam felis, bibendum sed leo vitae, scelerisque molestie magna. Quisque egestas, eros sit amet consequat porttitor, ipsum justo mattis tellus, ac lobortis metus nunc quis felis. Proin ultrices scelerisque turpis. Nam sed urna quis tortor mollis pulvinar. Aliquam nec nisi diam. Nam id ex id lectus ornare hendrerit nec non ante. Nam non metus nulla. Suspendisse neque nisl, semper vel efficitur quis, vulputate sed lorem. Donec mattis sed felis a volutpat. </div>
                </div>
                <div class="written-review">
                    <div class="review-rating">&#9733 &#9733 </div>
                    <div class="review-text">  Fusce faucibus libero ac justo ornare, vitae pharetra velit ullamcorper. Quisque id euismod magna, vel sagittis quam. Fusce tempus sem quis velit tristique, vel vestibulum nulla imperdiet. Pellentesque vel justo eu enim hendrerit semper. Phasellus ut risus massa. Duis sit amet metus sapien. Vestibulum purus nulla, auctor eu turpis ut, elementum congue nibh. Fusce varius, eros eu rutrum vestibulum, augue massa blandit ante, ut fringilla velit sapien suscipit dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vivamus quis purus aliquet, dignissim erat eget, ornare turpis. Aliquam erat volutpat. Vivamus et nulla sit amet purus pulvinar porta pulvinar vitae odio. Nam tincidunt, lectus vel efficitur euismod, felis metus vulputate libero, pellentesque ultricies erat mi sit amet nunc.  </div>
                </div>
            </div>

            
        </section>
    </main>
    <x-footer> </x-footer>
    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>