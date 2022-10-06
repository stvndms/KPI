<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class March extends Model
{
    use HasFactory;
    protected $table = 'marchs';
    protected $fillable = ['name', 'image',];

}
