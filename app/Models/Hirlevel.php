<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hirlevel extends Model
{
    // melyik database-t akarom kiválasztani 
    protected $table = 'hir';
    
    // ez a része nem kell
    protected $fillable = [
        'textname',
        'paragraph',
    ];
}
