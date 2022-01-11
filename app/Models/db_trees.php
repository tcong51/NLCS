<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class db_trees extends Model
{
    use HasFactory;
    protected $table = 'db_trees';
    public $primaryKey = 'Code';
    public $incrementing = false;
}
