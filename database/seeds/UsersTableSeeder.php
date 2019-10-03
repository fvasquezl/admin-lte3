<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Faustino Vasquez',
            'email' => 'fvasquez@local.com',
            'role' => 'admin'
        ]);
        factory(User::class)->create([
            'name' => 'Sebastian Vasquez',
            'email' => 'svasquez@local.com',
            'role' => 'employee'
        ]);
        factory(User::class, 20)->create();
    }
}
