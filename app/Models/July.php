<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class July extends Model
{
    use HasFactory;
    protected $table = 'julys';
    protected $fillable = ['name', 'image',];

}
