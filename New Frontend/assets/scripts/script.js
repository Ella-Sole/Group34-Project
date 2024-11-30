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

