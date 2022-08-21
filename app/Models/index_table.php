<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class index_table extends Model
{
    use HasFactory;

    protected $table = 'index';

    protected $fillable = [
        'id',
        'item',
        'Unit',
        'Quantity',
        'the_value',
        'purpose_of_purchase',
        'order_type'
    ];
}
