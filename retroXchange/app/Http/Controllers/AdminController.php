<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

//these functions are for all the admin pages
class AdminController extends Controller
{
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

            //redirect back to inventory page if successful
            return redirect()->intended('/admininventory')->with('success', 'Product updated!');
                
        }


    }
}
