<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    // Table name (optional, if different from 'certificates')
    // protected $table = 'certificates';

    // Fields that are mass assignable
    protected $fillable = [
        'certificateimage',
        'name',
    ];
}
