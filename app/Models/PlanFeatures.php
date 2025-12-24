<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanFeatures extends Model
{
    use HasFactory;
    protected $fillable = ['plan_id', 'key', 'value'];

    public function plan()
    {
        return $this->belongsTo(Plans::class);
    }
}
