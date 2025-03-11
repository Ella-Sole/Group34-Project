<!DOCTYPE html>
<html>

<x-head>
    @section('title', 'Review')
</x-head>

<body class = "review-body">
     <x-header-navbar> </x-header-navbar>
    <div class="review-container">
        <h3>Please submit a review</h3>
        <form id=""reviewForm">
            <label for="name"> Name</label><br>
            <input type="text" id="name" name="name" required><br><br>
            <label for="review">Review</label><br>
            <textarea id="review" name="review" required></textarea><br><br>
            <button type="submit">Submit</button>
        </form>

<h1>  Reviews   </h1>
<p> This page is dedicated to customers who have purchased products from us, these reviews are checked legitmately to make sure people can buy our products  </p>
<p> As seen below we have an outline of what the customers think of the games </p>
<div id="reviews"></div>
<script>
    document.getElementById("review").addEventListener("submit", function(event) {
        event.preventDefault();
        
        let name = document.getElementById("name").value;
        let review = document.getElementById("review").value;
        
        if (name && review) {
            let reviewDiv = document.createElement("div");
            reviewDiv.classList.add("review");
            reviewDiv.innerHTML = `<strong>${name}:</strong> <p>${review}</p>`;
        }
        
        document.getElementById("reviewForm").reset();
    });
</script>

<hr> 


</body>
</html>
