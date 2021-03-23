<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'name' => 'Saidorif Kadirov',
            'email' => 'sayyid2112@gmail.com',
            'password' => Hash::make('pmedia'),
        ];
        $user = DB::table('users')->insert($admin);
    }
}
