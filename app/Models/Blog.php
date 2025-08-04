<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs'; // Table name

    protected $fillable = [
        'heading', 
        'user',
        'description', 
        'long_description', 
        'image',
        'date',
    ];
}
