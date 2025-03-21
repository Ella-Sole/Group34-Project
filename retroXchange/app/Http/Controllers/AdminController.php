<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use App\Models\PurchasedItems;

//these functions are for all the admin pages (inventory, order management, customer management)
class AdminController extends Controller
{
    //Inventory page functions:
    public function addProduct(Request $request){
        //validates the info put into form
        $s = Validator::make($request->all(),[
            'pname' => 'required',
            'pimage' => 'required',
            'pcategory' => 'required',
            'pdescription' =>'required',
            'pprice' => 'required|numeric|min:0.01',
            'pstock' => 'required|integer|min:0',
        ]);

        //if fails, returns error:
        if ($s->fails()){
            return back()->with('error', 'Please enter all product details correctly!');

        } else {
            //refer to product model to create a new row in items_for_sale table
            Product::create([
                'item_name' => $request->pname,
                'item_image' => $request->pimage,
                'category' => $request->pcategory,
                'item_description' => $request->pdescription,
                'item_price' => $request->pprice,
                'item_stock' => $request->pstock,
            ]);

            //redirect back to inventory page if successful
            return redirect()->intended('/admininventory')->with('success', 'Product added!');
                
        }
    }

    public function editProduct(Request $request){
        //validates the info put into form
        $s = Validator::make($request->all(),[
            'pname' => 'required',
            'pimage' => 'required',
            'pcategory' => 'required',
            'pdescription' =>'required',
            'pprice' => 'required|numeric|min:0.01',
            'pstock' => 'required|integer|min:0',
            
        ]);

        //store product id
        $pid = $request->pid;

        //if fails, returns error:
        if ($s->fails()){
            return back()->with('error', 'Please enter all product details correctly!');

        } else {
            //find product by its id then update all fields
            Product::where('item_id',$pid)
            ->update([
                'item_name' => $request->pname,
                'item_image' => $request->pimage,
                'category' => $request->pcategory,
                'item_description' => $request->pdescription,
                'item_price' => $request->pprice,
                'item_stock' => $request->pstock,
            ]);

            //get title of product
            $title = Product::where('item_id',$pid)->select('item_name')->pluck('item_name')->first();

            //redirect back to inventory page if successful
            return redirect()->intended('/admininventory')->with('success', $title . ' updated!');
                
        }
    }

    public function searchInventory(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search for the product (by either title or category)
        $products = Product::query()
            ->where('item_name', 'LIKE', "%{$search}%")
            ->orWhere('category', 'LIKE', "%{$search}")
            ->get();
    
        return view('admininventory', compact('products'));
    }

    public function deleteProduct($id){
        //get title of product
        $title = Product::where('item_id',$id)->select('item_name')->pluck('item_name')->first();

        //find product by its id then delete that row
        Product::where('item_id',$id)->delete();

        //redirect back to inventory page
        return redirect()->intended('/admininventory')->with('success', $title . ' deleted!');

    }

    //Order management page functions:
    public function displayProcessOrder(Request $request){
        $itemid = $request->item_id;
        $purchaseid = $request->purchase_id;

        //get first row that matches the query (limited to 1)
        $purchasedItem = PurchasedItems::where('purchase_id', $purchaseid)->where('item_id', $itemid)->limit(1)->get();
        //get item info
        $item = Product::where('item_id', $itemid)->get();

        return view('adminprocessorder', compact('item', 'purchasedItem'));

    }

    public function processOrder(Request $request){
        $itemid = $request->item_id;
        $purchaseid = $request->purchase_id;
        $status = $request->purchase_status;

        //if stock needs to update
        if($status == 'returned'){
            //increment stock by 1 as its returned (for other cases stock has already been appropriately updated after checkout)
            Product::where('item_id',$itemid)->increment('item_stock', 1); 
        }
        
        //update status of product ordered
        PurchasedItems::where('purchase_id', $purchaseid)->where('item_id', $itemid)->limit(1)->update(['purchase_status' => $status]);
        
        return redirect()->intended('/adminordermanagement')->with('success', 'Order #' . $purchaseid . ' processed!');

    }
    
    
}
