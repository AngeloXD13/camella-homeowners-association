<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnnouncementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('t4_announcements')->insert([
            'subject' => 'subject_sample',
            'description' => 'We greatly present our newly made website in able us to see announcements and information at iba pa',
            'director_id' => 1,
            'severity' => 'high',
            'tag' => 'public',
        ]);

        $this->call([
            AnnouncementsFileSeeder::class
        ]);

    }
}
