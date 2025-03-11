<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Settings</title>
</head>
<body>
    <div class="container">
        <h2 class="title">Profile Settings</h2>
        <input class="input-field" id="name" type="text" placeholder="Full Name">
        <input class="input-field" id="email" type="email" placeholder="Email">
        <button class="btn btn-primary" onclick="updateProfile()">Update</button>

        <h2 class="title">Payment Preferences</h2>
        <div id="payment-list">
            <div class="payment-preferences">
                <span>Visa - **** 6825</span>
                <button class="button button-fail" onclick="removePayment(this)">Remove</button>
            </div>
        </div>
        <button class="button button-success" onclick="createPayment()">Create a payment</button>

        <button class="button button-fail" onclick="removeProfile()">Remove Profile</button>
    </div>

    <script>
        function updateProfile() {
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            if (name && email) {
                alert("Profile updated");
            } else {
                alert("Please enter name and email.");
            }
        }

        function addPayment() {
            const paymentList = document.getElementById("payment-list");
            const newPayment = document.createElement("div");
            newPayment.classList.add("payment-option");
            newPayment.innerHTML = '<span>MasterCard - **** 5824</span> <button class="button button-fail" onclick="deletePayment(this)">Delete</button>';
            paymentList.appendChild(newPayment);
        }

        function deletePayment(button) {
            button.parentElement.remove();
        }

        function removeProfile() {
            if (confirm("Do you want to delete this profile?")) {
                alert("Profile deleted");
                document.getElementById("name").value = "";
                document.getElementById("email").value = "";
                document.getElementById("payment-list").innerHTML = "";
            }
        }
    </script>
</body>
</html>
