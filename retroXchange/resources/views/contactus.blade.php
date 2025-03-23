<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script>
        function validateForm(event) {
            event.preventDefault(); // Prevent form submission
            
            let name = document.getElementById("name").value.trim();
            let email = document.getElementById("email").value.trim();
            let query = document.getElementById("query").value.trim();
            let errorMessages = [];
            
            if (name === "") errorMessages.push("Full Name is missing");
            if (email === "") errorMessages.push("Email Address is missing");
            if (query === "") errorMessages.push("Your Query is missing");
            
            let messageDiv = document.getElementById("message");
            if (errorMessages.length > 0) {
                messageDiv.innerHTML = "<b>Missing Fields:</b><br>" + errorMessages.join("<br>");
                messageDiv.style.color = "red";
            } else {
                messageDiv.innerHTML = "Success the querey has been sent!";
                messageDiv.style.color = "green";
            }
        }
    </script>
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
