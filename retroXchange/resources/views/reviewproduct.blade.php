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

            <div class = "review-form">
                <section>
                    <form>
                        <label for = "query">Your Review:</label>
                        <select name="rating" id="rating" required>
                            <option value="">Choose a rating</option>
                            <option value="1">&#9733</option>
                            <option value="2">&#9733&#9733</option>
                            <option value="3">&#9733&#9733&#9733</option>
                            <option value="4">&#9733&#9733&#9733&#9733</option>
                            <option value="5">&#9733&#9733&#9733&#9733&#9733</option>
                        </select><br>
                        <textarea id="query" name="query" rows="10" cols="40" required> 
                        </textarea> <br>
                        <!-- Magical button that sends the data to the db -->
                        <input type="submit" value="submit">
                    </form>
                </section>
            </div>
        </main>
    </div>

    <x-footer> </x-footer>

    <script src="{{ asset('/script.js') }}"></script>
</body>

</html>
