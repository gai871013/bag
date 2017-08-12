<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bags extends Model
{
    protected $fillable = [
        'name',
        'auth_name',
        'brand',
        'series',
        'date',
        'type',
        'price',
        'edge_wear',
        'cortex',
        'style',
        'design',
        'parts',
        'line',
        'is_check_parts',
        'girdle',
        'metals',
        'logo',
        'lining',
        'smell',
        'level_usage',
        'metals_wear',
        'blot',
        'colour_fading',
        'off_line',
        'chip',
        'level_new_old',
        'buy_time',
        'evaluated_price',
        'details',
        'auth_details'
    ];
}
