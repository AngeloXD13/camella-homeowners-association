<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnouncementFile extends Model
{
    use HasFactory;

    protected $table = 'T5_Announcements_File';
    // protected $primaryKey = 'DirectorID';

    protected $fillable = [
        'announcement_id',
        'type',
        'title',
        'filename',
        'filedirectory',
        'tag',
        'status',
        'remarks'
    ];
}
