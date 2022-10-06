<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class November extends Model
{
    use HasFactory;
    protected $table = 'novembers';
    protected $fillable = ['name', 'image',];

}
