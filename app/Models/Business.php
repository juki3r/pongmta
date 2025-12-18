<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;

class Business extends Model
{
    use HasFactory;

    // Mass assignable fields
    protected $fillable = [
        'user_id',
        'name',
        'category',
        'phone',
        'address',
        'logo',
        'cover_image',
    ];

    // Relationship: A business belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship: A business has many products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
