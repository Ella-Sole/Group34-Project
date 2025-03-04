<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

//display the returned view page when the url has '/..'

//default '/' returns homepage
Route::get('/', function(){
    return view('homepage', [
        //fetch all the product rows data from the Product Model and put into an array 'products'
        //this variable will be passed into the view to be used
        'products' => Product::all()
    ]);
});

Route::get('/about', function(){
    return view('aboutus');
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

//login functionality calls the login function of usercontroller
Route::post('loginUser', [UserController::class, 'login'])->name('loginUser');

Route::get('/signup', function(){
    return view('signup');
});

//logout functionality calls the logout function of UserController
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('register', [UserController::class, 'signup'])->name('register');
 
Route::get('/previousorders', function(){
    return view('previousOrders');
});

//products page
Route::get('/products', function(){
    return view('productListingPage', [
        //fetch all the product rows data from the Product Model and put into an array 'products'
        //this variable will be passed into the view to be used
        'products' => Product::all()
    ]);
});

//uses showBasket function to display the basket content in the basket page
Route::get('/basket', [ProductController::class,'showBasket'])->name('basket');

//when add to basket button is clicked, the function addToBasket is done
Route::get('addToBasket/{id}', [ProductController::class, 'addToBasket']);

//remove from basket when the button is clicked
Route::get('removeFromBasket/{id}', [ProductController::class, 'removeFromBasket']);
//searches for product using the controller's search function
Route::get('/search/', 'App\Http\Controllers\ProductController@search')->name('search');
