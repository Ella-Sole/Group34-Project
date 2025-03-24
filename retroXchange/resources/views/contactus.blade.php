<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body class="contact-us-page-layout background">
    <x-header-navbar></x-header-navbar>
    <div>
        <main>
            <div class="contact-us-header">
                <h1>Contact Us</h1>
            </div>
            <div class="contact-us-form">
                <section>
                    <form onsubmit="validateForm(event)">
                        <label for="name">Full Name:</label><br>
                        <input type="text" id="name" name="name"><br>
                        <label for="email">Email Address:</label><br>
                        <input type="text" id="email" name="email"> <br>
                        <label for="query">Your Query:</label><br>
                        <textarea id="query" name="query" rows="10" cols="40"></textarea><br>
                        <input type="submit" value="Submit">
                    </form>
                    <div id="message" style="margin-top: 10px;"></div>
                </section>
            </div>
        </main>
    </div>
    <x-footer></x-footer>
</body>
</html>
