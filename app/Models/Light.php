<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Light extends Model
{
    use HasFactory;
    protected $table = 'Light';
    public $primaryKey = 'Code';
    public $incrementing = false;
}
