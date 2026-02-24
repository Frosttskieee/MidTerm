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
            ['name' => 'Model', 'Description' => 'Advanced'],
            ['name' => 'View', 'Description' => 'Advanced'],
            ['name' => 'Controller', 'Description' => 'Advanced'],
            ['name' => 'Routes', 'Description' => 'Advanced'],
            ['name' => 'Middleware', 'Description' => 'Advanced'],
            ['name' => 'Blade Templates', 'Description' => 'Advanced'],
            ['name' => 'Migrations', 'Description' => 'Advanced'],
            ['name' => 'Seeders', 'Description' => 'Advanced'],
            ['name' => 'Database', 'Description' => 'Advanced'],
            ['name' => 'Eloquent ORM', 'Description' => 'Advanced'],
        ]);
    }
}
