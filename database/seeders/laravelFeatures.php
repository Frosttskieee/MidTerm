<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class laravelFeatures extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laravelfeatures')->insert([
            ['name' => 'Model', 'Description' => ''],
            ['name' => 'View', 'Description' => ''],
            ['name' => 'Controller', 'Description' => ''],
            ['name' => 'Routes', 'Description' => ''],
            ['name' => 'Middleware', 'Description' => ''],
            ['name' => 'Blade Templates', 'Description' => ''],
            ['name' => 'Migrations', 'Description' => ''],
            ['name' => 'Seeders', 'Description' => ''],
            ['name' => 'Database', 'Description' => ''],
            ['name' => 'Eloquent ORM', 'Description' => ''],
        ]);
    }
}
