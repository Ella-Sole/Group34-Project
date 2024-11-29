<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    //specify which database table the Model uses
    protected $table = 'user_details';

    //for safety precautions define which attributes can be fillable/set when data is input
    protected $fillable = [
        'login_info',
        'personal_details_info',
        'payment_metod',
        'purchase_history',
        'user_status'
    ];
}
