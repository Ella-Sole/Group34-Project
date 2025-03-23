<!DOCTYPE html>
<html lang="en">
<x-head>
    @section('title', 'Review')
</x-head>



<body class = "review-page-layout background">
    <x-header-navbar> </x-header-navbar>

    <div>
        <main>
            <div class = "review-header">
                <h1>Review</h1>
            </div>

            @if (session()->has('error'))
                <h2 style="color:red" align="center"> {{session('error')}}</h2>
            @endif

            <div class = "review-form">
                <section>
                    <form method="post" action="{{ route ('submitreview') }}">
                        @csrf
                        <input type="hidden" name="pid" value="{{ $product->item_id }}">
                        <label for = "review">Your Review:</label><br>

                        <label for="rating">Choose a rating</label>
                        <select name="rating" id="rating" required>
                            <option value="1">&#9733</option>
                            <option value="2">&#9733&#9733</option>
                            <option value="3">&#9733&#9733&#9733</option>
                            <option value="4">&#9733&#9733&#9733&#9733</option>
                            <option value="5">&#9733&#9733&#9733&#9733&#9733</option>
                        </select><br>

                        <textarea id="review" name="review" rows="10" cols="40" required> 
                        </textarea> <br>
                        <input type="submit" value="Submit Review">
                    </form>
                </section>
            </div>
        </main>
    </div>

    <x-footer> </x-footer>

    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
