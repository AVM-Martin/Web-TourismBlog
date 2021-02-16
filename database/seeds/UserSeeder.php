<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->states('admin')->create([
            'name' => 'ADMIN',
            'email' => 'admin@google.com',
        ]);

        factory(User::class)->create([
            'email' => 'user_a@google.com',
        ]);

        factory(User::class)->create([
            'email' => 'user_b@google.com',
        ]);

        factory(User::class, 2)->create();
    }
}
