<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BODseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('t2_boardofdirector')->insert([
            'username' => 'iskothepusa',
            'firstname' => 'Isko',
            'middleinitial' => 'B',
            'lastname' => 'Dionisio',
            'email' => 'isko@gmail.com',
            'phonenumber' => '09123456781',
            'password' => Hash::make('password'),
            'position' => 'PROGRAMMER',
            'tag' => 'Active',
            'remarks' => 'PUSA',
            'bod_image' => '/images/pusa.jpg'
        ]);

        $this->call([
            BODRoleseeder::class
        ]);
    }
}
