<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    //specify which database table the Model uses
    protected $table = 'user_details';

    public $timestamps = false;

    //for safety precautions define which attributes can be fillable/set when data is input
     protected $fillable = [
         'users_id',
         'personal_details_info',
         'payment_method'
     ];
}
