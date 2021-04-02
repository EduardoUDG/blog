<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::created([
            'name' => 'Eduardo Chavez Dorado',
            'email' => 'eduardo323232@gmail.com',
            'password' => bcrypt('12345678')
        ]);


        User::factory(99)->create();
    }
}
