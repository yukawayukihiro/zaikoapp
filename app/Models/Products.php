<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'test_products';
    protected $fillable = [
        'company_id',
        'product_name',
        'price',
        'stock',
        'comment',
    ];
}
