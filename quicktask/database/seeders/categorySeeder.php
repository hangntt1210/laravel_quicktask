<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Business'],
            ['id' => 2, 'name' => 'Medical'],
            ['id' => 3, 'name' => 'Sport']
        ]);
    }
}
