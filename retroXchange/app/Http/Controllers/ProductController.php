<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use the product model
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{   
    public function listProducts() {
        //return all the products in the database
        return(Product::all());
    }

    //functions for the basket page
    public function addTobasket($id) {
        //find the specific product by its ID, then store it into $basketItem
            //(need to specify primary key, otherwise it looks for one named 'id')
        $basketItem = Product::where('item_id',$id)->first();

        //check if the session variable for the basket is set
       if(!Session::has('basket')){
        //set basket as an array
        Session::put('basket', []);
        }

        //push so its appended to the end of array 'basket'
        Session::push('basket', $basketItem);

        //redirection back to products page
        return back()->with('success', 'Item added to basket');
    }

    //list all items in basket
    public function showBasket() {
        //put the basket session into its own variable
        $thebasket = Session::get('basket');

        //return basket page with an array
        return view('basket', array('thebasket' => $thebasket));
    }
}
