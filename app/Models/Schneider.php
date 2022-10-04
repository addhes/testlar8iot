<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schneider extends Model
{
    use HasFactory;

    protected $table = 'schedule';
    protected $fillable = ['datetime', 'value_1', 'value_2', 'device_id'];
}
