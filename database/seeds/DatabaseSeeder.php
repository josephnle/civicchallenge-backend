<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(UsersSeeder::class);
    	$this->call(CategoriesSeeder::class);
        $this->call(ChallengesSeeder::class);
        $this->call(QuestionsSeeder::class);
        $this->call(InsightsSeeder::class);
        $this->call(EventsSeeder::class);
        $this->call(ChannelsSeeder::class);
    }
}
