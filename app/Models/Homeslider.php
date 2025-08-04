<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeslider extends Model
{
    use HasFactory;

    // Table name (optional, agar default naming follow nahi ki ho)
    protected $table = 'homesliders';

    // Mass assignable fields
    protected $fillable = [
        'heading1',
        'heading2',
        'description',
        'homesliderimage',
    ];
}
