<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationContent extends Model
{
    use HasFactory;

    protected $table = 't7_information_content';

    protected $fillable = [
        'i_catergory_id',
        'heading1',
        'heading2',
        'heading3',
        'heading4',
        'heading5',
        'tag',
        'status',
        'remarks'
    ];
}
