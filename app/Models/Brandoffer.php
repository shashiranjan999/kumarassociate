<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brandoffer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'category',
        'shop_name',
        'offer',
        'shoplogo',
        'address',
        'validity',
        'map_link',
        'contact'
    ];
}
