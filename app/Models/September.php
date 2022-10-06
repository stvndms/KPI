<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class September extends Model
{
    use HasFactory;
    protected $table = 'septembers';
    protected $fillable = ['name', 'image',];

}
