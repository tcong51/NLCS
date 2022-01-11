<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Climate extends Model
{
    use HasFactory;
    protected $table = 'Climate';
    public $primaryKey = 'Code';
    public $incrementing = false;
}
