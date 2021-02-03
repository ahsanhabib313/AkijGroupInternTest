<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $fillable=['product_name','product_price','production_date','expire_date'];
    protected  $hidden=['created_at', 'updated_at'];
}
