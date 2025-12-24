<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsageLog extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','feature_key','used_at'];
    public $timestamps = false;
}
