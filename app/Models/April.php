<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class April extends Model
{
    use HasFactory;
    protected $table = 'aprils';
    protected $fillable = ['name', 'image',];

}
