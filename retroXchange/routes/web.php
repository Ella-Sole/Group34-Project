<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Product;
use App\Models\PurchaseHistory;
use App\Models\PurchasedItems;
use App\Models\User;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

//display the returned view page when the url has '/..'

//default: '/' returns homepage
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

Route::get('/admininventory', function(){
    return view('admininventory', [
        'products' => Product::all()
    ]);
});

//searching for a product within the inventory page itself
Route::get('/searchinventory', [AdminController::class, 'searchInventory'])->name('searchInventory');

Route::get('/adminaddproduct', function(){
    return view('adminaddproduct');
});

//gets the product by the id passed in and returns it to the view
Route::get('admineditproduct/{id}', function($id){
    return view('admineditproduct', [
        'product' => Product::where('item_id',$id)->first()
    ]);

});

//edit product form submission
Route::post('editproduct', [AdminController::class, 'editProduct'])->name('editproduct');

//add product form submission
Route::post('addproduct', [AdminController::class, 'addProduct'])->name('addproduct');

//delete product from inventory
Route::get('admindeleteproduct/{id}', [AdminController::class, 'deleteProduct']);

Route::get('/admincustomermanagement', function(){
    return view('admincustomermanagement');
});

Route::get('/adminordermanagement', function(){
    return view('adminordermanagement', [
        'histories' => PurchaseHistory::all(),
        'purchasedItems' => PurchasedItems::all(),
        'products' => Product::all(),
        'users' => User::all()

    ]);
});

//searching for an order within the order management page itself
Route::get('/searchorders', [AdminController::class, 'searchOrders'])->name('searchOrders');

//display the page to process an order
Route::post('admindisplayprocessorder', [AdminController::class, 'displayProcessOrder'])->name('admindisplayprocessorder');

//process order
Route::post('processorder', [AdminController::class, 'processOrder'])->name('processorder');

Route::get('/contact', function(){
    return view('contactus');
});

Route::get('/productlisting', function(){
    return view('productlisting');
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
 
Route::get('/previousorders', [OrdersController::class, 'showPurchaseHistory']);

Route::post('returnproduct', [OrdersController::class, 'displayReturnProduct'])->name('returnproduct');

Route::post('confirmreturn', [OrdersController::class, 'returnProduct'])->name('confirmreturn');

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

Route::get('/checkout', [CheckoutController::class, 'displayCheckout']);

Route::post('/completecheckout/{total}', [CheckoutController::class, 'completeCheckout']);


//searches for product using the controller's search function
Route::get('/search/', 'App\Http\Controllers\ProductController@search')->name('search');

//password reset page
Route::get('/reset', function(){
    return view('reset');
});

//view individual product page
Route::get('productview/{id}', function($id){
    return view('productview', [

        'product' => Product::where('item_id',$id)->first()
    ]);
});

Route::get('/review',function(){
    return view('review');
});

Route::get('/userpayment',function(){
    return view('userpayment');
});
