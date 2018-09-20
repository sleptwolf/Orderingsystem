<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soup extends Model
{
    protected $fillable = [
        'quantity', 'table_no'
    ];
}
