<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productcategory extends Model
{
    use HasFactory;

    // Table name set karna zaruri hai, kyunki naam irregular hai (productcategorys)
    protected $table = 'productcategorys';

    // Mass assignable field
    protected $fillable = [
        'productcategory',
        'productcategoryimage',
        'product_category_description',
    ];
}
