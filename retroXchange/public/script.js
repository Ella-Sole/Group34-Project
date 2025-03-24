
//Add each element in each class to an array
const productContainer = [...document.querySelectorAll('.product-container')];
const nextBtns = [...document.querySelectorAll('.nxt-btn')];
const backBtns = [...document.querySelectorAll('.pre-btn')];

/*Loop through each product in the container 
and scroll the container by the width of one product when arrows are clicked */
productContainer.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    if (nextBtns[i]) {
        nextBtns[i].addEventListener('click', () => {
            item.scrollLeft += containerWidth;
        });
    }

    if (backBtns[i]) {
        backBtns[i].addEventListener('click', () => {
            item.scrollLeft -= containerWidth;
        });
    }
});

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

function toggleDropdown(event, dropdownId) {
    event.stopPropagation();
    var dropdown = document.getElementById(dropdownId);
    dropdown.classList.toggle("show");
}


window.onclick = function (event) {
    if (!event.target.matches('.dropbtn') && !event.target.closest('.dropdown')) {
        var dropdowns = document.querySelectorAll('.dropdown-content, .dropdown-content2, .dropdown-content3');
        dropdowns.forEach(function (dropdown) {
            dropdown.classList.remove('show');
        });
    }
}

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

var dropdown = document.getElementsByClassName("sidemenu-dropdown-btn",);
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}

function sidemenuFunction() {
document.querySelector(".sidemenu").classList.toggle("show");
  }

      function toggleDarkMode() {
        document.body.classList.toggle("dark-mode");
    
        if (document.body.classList.contains("dark-mode")) {
            localStorage.setItem("darkMode", "enabled");
        } else {
            localStorage.setItem("darkMode", "disabled");
        }
    }
    
    window.onload = function () {
        if (localStorage.getItem("darkMode") === "enabled") {
            document.body.classList.add("dark-mode");
        }
    };
function contactus(){
document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); 
            document.getElementById('successMessage').style.display = 'block';
        });
}

function validateForm(event) {
    event.preventDefault(); 
    
    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let query = document.getElementById("query").value.trim();
    let errorMessages = [];
    
    if (name === "") errorMessages.push("Full Name is missing");
    if (email === "") {
        errorMessages.push("Email Address is missing");
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        errorMessages.push("Invalid Email Address format");
    }
    if (query === "") errorMessages.push("Your Query is missing");

    
    let messageDiv = document.getElementById("message");
    if (errorMessages.length > 0) {
        messageDiv.innerHTML = "<b>Error:</b><br>" + errorMessages.join("<br>");
        messageDiv.style.color = "red";
    } else {
        messageDiv.innerHTML = "The query has been sent. Thank you!";
        messageDiv.style.color = "green";
    }
}