<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [        
        'item',
        'quantity',
        'category',
        'price',
        'status',
        'table_id'
    ];
}
