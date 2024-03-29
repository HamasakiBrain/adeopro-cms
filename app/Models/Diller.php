<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diller extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'corX', 'corY', 'phone', 'address'];
}
