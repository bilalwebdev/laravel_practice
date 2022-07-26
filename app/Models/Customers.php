<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
//use App\Models\Customers; 

class Customers extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "customers";
    protected $primaryKey = "customer_id"; 

    public function setFirstNameAttribute($fvalue)
     {
           $this->attributes['first_name'] = ucwords($fvalue);

     }
     public function setLastNameAttribute($lvalue)
     {
          
            $this->attributes['last_name'] = ucwords($lvalue);
     }
     public function getDobAttribute($value)
     {
          return date("d-M-Y", strtotime($value));
     }
     
}
