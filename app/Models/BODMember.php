<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BODMember extends Model
{
    use HasFactory;

    protected $table = 'T2_BoardOfDirector';
    // protected $primaryKey = 'DirectorID';

    protected $fillable = [
        'hoa_id',
        'username',
        'firstname',
        'middleinitial',
        'lastname',
        'email',
        'phonenumber',
        'password',
        'position',
        'pag',
        'remarks'
    ];

}
