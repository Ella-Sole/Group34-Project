<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

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

        //.Auth::id() makes it so that each basket variable is assigned/titled to a specific user id
            //if user id is 2 then basket variable is basket2

        //check if the session variable for the basket is set
       if(!Session::has('basket'.Auth::id())){
        //set basket as an array
        Session::put('basket'.Auth::id(), []);
        }

        //use this to check if an item is already in the basket
        $itemAdded = false;
        //store basket into a variable
        $b = Session::get('basket'.Auth::id());

        //loop over basket
        foreach ($b as &$item){
            if($item['item_id'] == $id){
                $item['quantity'] += 1;
                $itemAdded = true;

            }

        }

        //push so its appended to the end of array 'basket'
        if(!$itemAdded){
        $basketItem->quantity = 1;
        Session::push('basket'.Auth::id(), $basketItem); 
        }
        
        //redirect back to products page with success message
        return back()->with('success', 'Item added to basket!');
    }

    //list all items in basket
    public function showBasket() {
        //put the basket session into its own variable
        $thebasket = Session::get('basket'.Auth::id());

        //return basket page with an array
        return view('basket', array('thebasket' => $thebasket));
    }

    //bug: if theres duplicate products, it removes all instances of that product instead of just one
    public function removeFromBasket($id) {
        $thebasket = Session::get('basket'.Auth::id());

        //get the item from database by id
        $removedItem = Product::where('item_id',$id)->first();

        //loop over the array, getting key (index in array) and its value (the row stored there)
        foreach($thebasket as $key => $val){
            //if the id matched with the one that is supposed to be removed:
            if($val['item_id'] == $removedItem['item_id']){

                //unset removes element from the array by its key
                unset($thebasket[$key]);
                
                //put new basket contents into session variable
                Session::put('basket'.Auth::id(), $thebasket);
            }
        }
        //return basket page with an array (again)
        return view('basket', array('thebasket' => $thebasket));
    }

    public function search(Request $request){
    // Get the search value from the request
    $search = $request->input('search');

    // Search for the product
    $products = Product::query()
        ->where('item_name', 'LIKE', "%{$search}%")
        ->get();

    // Return the search view with the results compacted
    return view('search', compact('products'));
    }

}
