<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monsters extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'armor_class',
        'challange_rating',
        'type',
        'size',
        'image',
        'hp',
        'str',
        'dex',
        'con',
        'wis',
        'cha',
    ];
}
