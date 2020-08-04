<?php

use Illuminate\Database\Seeder;

class ConversationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(App\User::class, 5)->create();
        factory(App\Conversations::class, 5)->create();
        factory(App\Reply::class, 15)->create();
    }
}
