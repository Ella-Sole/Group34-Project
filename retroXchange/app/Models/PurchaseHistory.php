<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PurchaseHistory extends Model
{
    //specify which database table the Model uses
    protected $table = 'purchase_history';

    public $timestamps = false;

    //for safety precautions define which attributes can be fillable/set when data is input
     protected $fillable = [
        'users_id',
        'total_price',
        'date_of_purchase',
        'purchase_status'
     ];
}
