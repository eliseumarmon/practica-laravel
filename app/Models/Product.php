<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $description
 * @property string $price
 * @property integer $stock
 */

class Product extends Model
{
    protected $table = "products";
    protected $fillable = [
        "name",
        "description",
        "price",
        "stock"
    ];
    protected $casts = [
        "price" => "decimal:2",
    ];
}
