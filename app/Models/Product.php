<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'img_product',
        'user_id'
    ];

    // one to many
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function data_service()
    {
        return $this->hasMany(Service::class);
    }
}
