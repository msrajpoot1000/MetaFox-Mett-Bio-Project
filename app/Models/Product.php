<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Productcategory;

class Product extends Model
{
    use HasFactory;

    // Table name automatic samajh jaata hai (products), isliye yaha define karna zaruri nahi

    protected $fillable = [
        'productcategory_id',
        'heading',
        'productimage',
        'description'
    ];

    // Relationship: Product belongs to Productcategory
    public function category()
    {
        return $this->belongsTo(Productcategory::class, 'productcategory_id');
    }
}
