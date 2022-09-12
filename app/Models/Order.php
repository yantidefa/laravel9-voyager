<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'Order';

    protected $fillable=['product_id','contact_id','payment_code','quantity'];
}
