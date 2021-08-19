<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Categories')->insert([
            ['id' => 1, 'name' => 'Business'],
            ['id' => 2, 'name' => 'Medical'],
            ['id' => 3, 'name' => 'Sport'],
        ]);
    }
}
