<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class August extends Model
{
    use HasFactory;
    protected $table = 'augusts';
    protected $fillable = ['name', 'image',];

}
