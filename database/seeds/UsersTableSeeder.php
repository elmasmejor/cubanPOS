<?php

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
        DB::table('users')->insert(
            [
                [
                    'name' => 'leo',
                    'email' => 'leoelmasmejor@gmail.com',
                    'password' => bcrypt('leo')
                ],
                [
                    'name' => 'pepe',
                    'email' => 'pepe@gmail.com',
                    'password' => bcrypt('pepe')
                ],
            ]
        );
    }
}
