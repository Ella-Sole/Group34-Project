<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchasedItems extends Model
{
    //specify which database table the Model uses
    protected $table = 'purchased_items';

    public $timestamps = false;

    //for safety precautions define which attributes can be fillable/set when data is input
    protected $fillable = [
         'purchase_id',
         'item_id'
     ];
}
