<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class June extends Model
{
    use HasFactory;
    protected $table = 'junes';
    protected $fillable = ['name', 'image',];

}
