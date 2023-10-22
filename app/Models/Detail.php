<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'seller', 'doc_type', 'location', 'secondary_damage',
        'est_retail_value', 'est_repair_value', 'transmission',
        'drive', 'car_keys', 'fuel', 'notes'
    ];
}
