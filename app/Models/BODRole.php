<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BODRole extends Model
{
    use HasFactory;

    protected $table = 'T3_BoardOfDirector_role';

    protected $fillable = [
        'directors_id',
        'm_announcements',
        'm_hoaMembers',
        'm_infos',
        'm_complaints',
        'm_requests',
        'm_gallery'
    ];
}
