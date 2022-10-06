<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class February extends Model
{
    use HasFactory;
    protected $table = 'februarys';
    protected $fillable = ['name', 'image',];

}
