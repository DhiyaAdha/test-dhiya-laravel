<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'name',
        'img_service',
        'product_id'
    ];

    // one to many
    public function data_product()
    {
        return $this->belongsTo(Product::class);
    }
}
