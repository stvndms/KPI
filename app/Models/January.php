<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class January extends Model
{
    use HasFactory;
    protected $table = 'januarys';
    protected $fillable = ['name','image',];

}
