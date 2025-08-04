<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';

    protected $fillable = [
        'heading',
        'image1',
        'image2',
        'image3',
        'description',
        'long_description',
        'our_mission_description',
        'our_vision_description',
    ];
}
