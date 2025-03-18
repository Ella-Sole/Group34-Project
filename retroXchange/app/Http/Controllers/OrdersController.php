<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\PurchaseHistory;
use App\Models\PurchasedItems;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class OrdersController extends Controller
{
    public function showPurchaseHistory(){
        if (Auth::check()){
            //get purchase histories for the user id
            $histories = PurchaseHistory::all();
            $purchasedItems = PurchasedItems::all();
            $products = Product::all();


            return view('previousOrders', compact('histories', 'purchasedItems', 'products'));
        }

    }

    public function displayReturnProduct(Request $request){
        $itemid = $request->item_id;
        $purchaseid = $request->purchase_id;

        //get first row that matches the query (limited to 1)
        $purchasedItem = PurchasedItems::where('purchase_id', $purchaseid)->where('item_id', $itemid)->limit(1)->get();
        //get item info
        $item = Product::where('item_id', $itemid)->get();

        return view('returnproduct', compact('item', 'purchasedItem'));
    }

    public function returnProduct(Request $request){
        $itemid = $request->item_id;
        $purchaseid = $request->purchase_id;

        //increment stock by 1 as its returned
        Product::where('item_id',$itemid)->increment('item_stock', 1);

        //update status of product
        PurchasedItems::where('purchase_id', $purchaseid)->where('item_id', $itemid)->limit(1)->update(['purchase_status' => 'returned']);
        
        //back to homepage route
        return redirect('/')->with('success', 'Item return confirmed!');

    }
}
