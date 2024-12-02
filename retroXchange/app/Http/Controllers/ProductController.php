<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use the product model
use App\Models\Product;
use Session;

class ProductController extends Controller
{   
    public function listProducts() {
        //return all the products in the database
        return(Product::all());
    }

    //functions for the basket page
    public function addTobasket(Request $id) {
        //find the specific product by its ID, then put it into a session variable $basket
        //had to use ::where instead of ::find as it wasnt looking for 'item_id' so there was an error
        Session::put('basket', [Product::where('item_id',$id)->first()]);
        //return the user back to product listing so it doesnt try to redirect to non-existent page in route
        return back();
    }

    //list all items in basket
    public function showBasket() {
        return(Session::get('basket'));
    }
}
