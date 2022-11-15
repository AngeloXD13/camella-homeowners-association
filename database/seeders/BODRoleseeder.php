<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BODRoleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  
        DB::table('t3_boardofdirector_role')->insert([
            'director_id' => 1,
            'm_announcements' => 0,
            'm_hoaMembers' => 0,
            'm_infos' => 0,
            'm_complaints' => 0,
            'm_requests' => 0,
            'm_gallery' => 0
        ]);
       
    }
}
