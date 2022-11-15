<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformationFile extends Model
{
    use HasFactory;

    protected $table = 't8_information_file';

    protected $fillable = [
        'i_content_id	',
        'type',
        'filename	',
        'filedirectory',
        'tag',
        'status',
        'remarks'
    ];

}
