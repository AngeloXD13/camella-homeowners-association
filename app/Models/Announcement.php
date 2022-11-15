<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $table = 't4_announcements';

    protected $fillable = [
        'subject',
        'description',
        'director_id',
        'severity',
        'tag',
        'status'
    ];
}
