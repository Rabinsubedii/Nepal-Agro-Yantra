<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topcard extends Model
{
    use HasFactory;
    protected $table = 'topcards';
    protected $fillable =[
        'title',
        'description',
        'icon'
    ];
}
