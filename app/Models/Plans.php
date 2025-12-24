<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price_monthly',
        'price_yearly',
        'is_free'
    ];

    public function features()
    {
        return $this->hasMany(PlanFeatures::class, 'plan_id');
    }

    public function feature($key)
    {
        return $this->features
            ->where('key', $key)
            ->first()
            ->value ?? null;
    }

}
