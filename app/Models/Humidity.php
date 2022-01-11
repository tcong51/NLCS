<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Humidity extends Model
{
    use HasFactory;
    protected $table = 'Humidity';
    public $primaryKey = 'Code';
    public $incrementing = false;
}
