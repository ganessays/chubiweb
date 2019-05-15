<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('users')->insert([
            ['name' => 'admin',
                'email' => 'admin@gmail.com',
                'role_id' => '1',
                'password' => bcrypt('admin002')],

            ['name' => 'user',
                'email' => 'user@gmail.com',
                'role_id' => '2',
                'password' => bcrypt('user002')],
        ]);
    }
}
