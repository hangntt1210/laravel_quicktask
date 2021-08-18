<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class newsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            ['id' => 1, 'category_id' => 1, 'title' => 'Mobile World changes dividend payment plan', 'body' => 'Electronics giant Mobile World has cut its planned cash dividend ratio for last year from 10 percent to 5 percent, seeking to pump up cash by VND237 billion ($10.38 million).'],
            ['id' => 2, 'category_id' => 2, 'title' => 'Vietnam confirmed 9,574 new Covid-19 cases', 'body' => 'Vietnam confirmed 9,574 new Covid-19 cases in 41 localities Sunday, raising the infection tally in the ongoing wave to 270,986.'],
            ['id' => 3, 'category_id' => 3, 'title' => 'Another Vietnamese archer exits Olympics', 'body' => 'Olympic archery comprises five sets per match, with each archer handed three shots per set. If a player wins a set, they get two points. A draw will afford one point to each player. Whoever reaches six points first takes the overall victory. In case of a draw after five sets, both players would enter a tie-break with each having only one shot. The most accurate wins.'],
            ['id' => 4, 'category_id' => 1, 'title' => 'Red ink continues to plague businesses', 'body' => 'Many companies continue to report losses for the first half of the year after being hit hard by the resurgence of Covid-19. Vietnam Airlines saw its loss increase by 65 percent year-on-year to nearly VND10.8 trillion ($475 million).'],
            ['id' => 5, 'category_id' => 2, 'title' => 'Vietnam to buy vaccine pfizer', 'body' => 'The first one million of Pfizer doses arrived in July and another three million are set to be delivered this month. The remaining 47 million doses are expected to be delivered in fourth quarter of the year.']
        ]);
    }
}
