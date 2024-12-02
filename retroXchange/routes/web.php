<?php

use Illuminate\Support\Facades\Route;
//add use of arr functions
use Illuminate\Support\Arr;
//allow use of the Product model
use App\Models\Product;
//allow use of Product controller
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

//display the returned view page when the url has '/..'
//some may be subject to change (may need user authentication in url etc.)

Route::get('/home', function(){
    return view('homepage');
});

Route::get('/about', function(){
    return view('aboutus');
});

Route::get('/basket', function(){
    return view('basket');
});

Route::get('/checkout', function(){
    return view('checkoutpage');
});

Route::get('/contact', function(){
    return view('contactus');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/signup', function(){
    return view('signup');
});
 
Route::get('/previousorders', function(){
    return view('previousOrders');
});

Route::get('/previousorderstable', function(){
    return view('previousOrdersTable');
});

//basket page maybe has an array that stores products across a user's session
//when check out is done, array is emptied, and purchase history in DB is updated with the array's values
Route::get('/basket', function(){
    return view('shoppingBasketTable', [
        'testBasket' => ProductController::class, 'showBasket'

    ]);
});

Route::get('/products', function(){
    return view('productListingPage', [
        //fetch all the product rows data from the Product Model and put into an array 'products'
        //this variable will be passed into the view to be used
        'products' => Product::all()
    ]);
});

//when add to basket button is clicked, the method addToBasket used
//->name() defines the name of the route in the view (leaving it out caused an error)
Route::post('addBasketItem', [ProductController::class, 'addToBasket'])->name('addBasketItem');