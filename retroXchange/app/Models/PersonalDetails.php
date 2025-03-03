<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalDetails extends Model
{
    //specify which database table the Model uses
    protected $table = 'personal_details';

    //for safety precautions define which attributes can be fillable/set when data is input
   /* protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'phone_number',
        'address',
        'postcode'
     ]; */
}
