<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    
    
        /**

        * @var array
        */

    

    protected $fillable = ['firstname', 'lastname' , 'age', 'gender', 'zipcode', 'city', 'street', 'housenumber', 'apartmentnumber'];

 
    
}
