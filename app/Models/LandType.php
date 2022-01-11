<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandType extends Model
{
    use HasFactory;
    protected $table = 'LandType';
    public $primaryKey = 'Code';
    public $incrementing = false;
}
