<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationCategory extends Model
{
    use HasFactory;

    protected $table = 't6_information_category';

    protected $fillable = [
        'title',
        'tag',
        'status',
        'parameters'
    ];
}
