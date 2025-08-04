<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allbanner extends Model
{
    use HasFactory;

    // Table name (zaruri hai kyunki naam singular nahi hai)
    protected $table = 'allbanners';

    // Allow mass assignment for these fields
    protected $fillable = [
        'aboutimage',
        'productimage',
        'certificateimage',
        'contactusimage',
    ];
}
