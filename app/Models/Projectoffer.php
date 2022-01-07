<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projectoffer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'property_name',
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
