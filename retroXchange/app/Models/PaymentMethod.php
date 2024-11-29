<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    //specify which database table the Model uses
    protected $table = 'payment_method';

    //for safety precautions define which attributes can be fillable/set when data is input
    protected $fillable = [
        'card_name_holder',
        'account_number',
        'expiry_date'
    ];
}
