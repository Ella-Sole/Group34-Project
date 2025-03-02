<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginDetails extends Model
{
    //specify which database table the Model uses
    protected $table = 'login_details';
    //protected $primaryKey = 'login_id';

    //for safety precautions define which attributes can be fillable/set when data is input
     protected $fillable = [
         'email',
         'password'
     ];
}
