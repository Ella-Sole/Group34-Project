<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Reviews')
</x-head>

<body class = "user-reviews-layout background">
    <x-header-navbar> </x-header-navbar>


    <main>
        <section class="user-reviews-section">
            <br><br>

            <!--error message-->
            @if (session()->has('error'))
                <h2 style="color:red" align="center"> {{ session('error') }}</h2>
            @endif
            
            <div class="user-reviews-heading">
                <h2 class="user-reviews-heading">Reviews for {{ $product['item_name'] }}</h2>

                <a href="{{ url('/reviewproduct/' . $product->item_id) }}">REVIEW THIS GAME</a>
            </div><br><br>

            @if(isset($reviews))

            @foreach($reviews as $r)

            @if($r['game_reviewed'] == $product['item_id'])
            
            
            <div class="review-container">
                <!--looped from the database -->
                <div class="written-review">
                    <div class="review-rating">
                        @for($i = 0; $i < $r['rating']; $i++)
                            &#9733
                        @endfor
                    </div>
                    <div class="review-text"> {{ $r['review'] }} </div>
                </div>
            </div>
            @endif

            @endforeach

            @endif

            
        </section>
    </main>
    <x-footer> </x-footer>
    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>