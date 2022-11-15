<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class InformationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('t6_information_category')->insert([
            'title' => 'BOD Members',
            'tag' => 'public',
            'status' => 'active',
            'parameters' => '',
        ]);

        DB::table('t6_information_category')->insert([
            'title' => 'Committee',
            'tag' => 'public',
            'status' => 'active',
            'parameters' => '',
        ]);

        DB::table('t6_information_category')->insert([
            'title' => 'Hoa Management Personel',
            'tag' => 'public',
            'status' => 'active',
            'parameters' => '',
        ]);

        DB::table('t6_information_category')->insert([
            'title' => 'Service and Amenities',
            'tag' => 'public',
            'status' => 'active',
            'parameters' => '',
        ]);

        DB::table('t6_information_category')->insert([
            'title' => 'Projects',
            'tag' => 'public',
            'status' => 'active',
            'parameters' => '',
        ]);

        DB::table('t6_information_category')->insert([
            'title' => 'Vicinity_Map',
            'tag' => 'public',
            'status' => 'active',
            'parameters' => '',
        ]);

        DB::table('t6_information_category')->insert([
            'title' => 'Gallery',
            'tag' => 'public',
            'status' => 'active',
            'parameters' => '',
        ]);

        DB::table('t6_information_category')->insert([
            'title' => 'Forms',
            'tag' => 'public',
            'status' => 'active',
            'parameters' => '',
        ]);



    }
}
