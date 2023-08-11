<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Units extends Model
{
    use HasFactory;
    protected $table = 'unitslist';

    protected $fillable= [
        'id',
        'name',
        'slug',
        'semester_id'
    ];
    
}
