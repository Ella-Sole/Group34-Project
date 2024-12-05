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
    public function addTobasket($id) {
        //find the specific product by its ID, then put it into a session variable $basket

        //had to use ::where instead of ::find as it wasnt looking for 'item_id' so there was an error
        //Session::put('basket', [Product::where('item_id',$id)->first()]);

        //put into array
        $basketItem = Product::where('item_id',$id)->first();

        Session::put('basket', $basketItem);
        //return var_dump(Session::get('basket'));

        return view('basket');
        //return back()->with('Product added to basket');
    }

    //list all items in basket
    public function showBasket() {
        //return view('/basket', session('basket'));
        return view('/basket'); 
        //return var_dump(Session::get('basket'));
    }
}
