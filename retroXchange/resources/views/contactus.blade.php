<!DOCTYPE html>
<html lang="en">
<x-head>
</x-head>
        


<body class = "contact-us-page-layout background">
    <x-header-navbar> </x-header-navbar>

    <div>
        <main>
            <div class = "contact-us-header">
                <h1>Contact Us</h1>
            </div>

            <div class = "contact-us-form">
                <section>
                    <form>
                        <label for="name"> Full Name:</lable><br>
                            <input type="text" id="name" name="name"><br>
                            <label for="email address"> Email Address:</label><br>
                            <input type="text" id="email" name="email"> <br>
                            <label for = "query">Your Query:</label>
                            <textarea id="query" name="query" rows="10" cols="40"> 
                            </textarea> <br>
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
