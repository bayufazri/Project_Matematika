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
        User::create([
            'name' => 'MTK Mr. Catur',
            'username' => 'admin',
            'password' => bcrypt('12345678')
        ]);
    }
}
