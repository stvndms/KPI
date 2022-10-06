<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mei extends Model
{
    use HasFactory;
    protected $table = 'meis';
    protected $fillable = ['name', 'image',];

}
