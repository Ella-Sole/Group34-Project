<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //specify which database table the Model uses
    protected $table = 'items_for_sale';

    //there is already an all() and find() method in Eloquent

    //for safety precautions define which attributes can be mass-assigned when data is input
/*     protected $fillable = [
        'item_price',
        'item_name',
        'item_description',
        'category'
    ]; */
}