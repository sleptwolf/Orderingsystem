<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noodles extends Model
{
    protected $fillable = [
        'quantity', 'table_no'
    ];
}
