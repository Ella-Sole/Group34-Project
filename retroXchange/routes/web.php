<?php

use Illuminate\Support\Facades\Route;
//add use of arr functions
use Illuminate\Support\Arr;
//put in use app\Models\modelName; maybe (e.g. Product)

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

Route::get('/shoppingbaskettable', function(){
    return view('shoppingBasketTable');
});

Route::get('/products', function(){
    return view('productListingPage');
});

//first make database migrations and models
//make the controllers for the products page
//have singular product page that use wildcards for product id
//use controller to get this database info into variables