<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserReviews extends Model
{
    //specify which database table the Model uses
    protected $table = 'user_reviews';

    public $timestamps = false;

    //for safety precautions define which attributes can be fillable/set when data is input
     protected $fillable = [
         'user_id',
         'game_reviewed',
         'rating',
         'review'
     ];
}
