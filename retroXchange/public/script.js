
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

// function review() {
//     document.getElementById("review").addEventListener("submit", function (event) {
//         event.preventDefault();

//         let name = document.getElementById("name").value;
//         let review = document.getElementById("review").value;

//         if (name && review) {
//             let reviewDiv = document.createElement("div");
//             reviewDiv.classList.add("review");
//             reviewDiv.innerHTML = `<strong>${name}:</strong> <p>${review}</p>`;
//         }

//         document.getElementById("reviewForm").reset();
//     }
// }

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

