<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnouncementsFileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('t5_announcements_file')->insert([
            'announcement_id' => 1,
            'type' => 'image/png',
            'title' => 'sample_screenshot.png',
            'filename' => 'announcement_master.png',
            'filedirectory' => 'annoucement_images',
            'tag' => 'maximized',
            'status' => 'masterfile',
            'remarks' => 'masterfile',
        ]);
    }
}
