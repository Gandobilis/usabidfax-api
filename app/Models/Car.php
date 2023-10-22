<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_price', 'make', 'model', 'year', 'color',
        'engine_type', 'vin', 'auction_name', 'sale_status',
        'lot_number', 'condition', 'primary_damage', 'odometer',
        'date_of_sale', 'main_photo', 'details_id'
    ];

    public function details(): HasOne
    {
        return $this->hasOne(Detail::class);
    }

    public function photos(): HasMany
    {
        return $this->hasMany(Photo::class);
    }
}
