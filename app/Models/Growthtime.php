<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Growthtime extends Model
{
    use HasFactory;
    protected $table = 'Growthtime';
    public $primaryKey = 'Code';
    public $incrementing = false;
}
