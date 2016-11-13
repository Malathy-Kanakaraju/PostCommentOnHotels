<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder {

    public function run() {

        DB::table('users')->delete();

        $users = array(
            array(
                'name' => 'user1',
                'email' => 'user1@example.com',
                'password' => Hash::make("user1")
            ),
            array(
                'name' => 'john',
                'email' => 'johndoe@example.com',
                'password' => Hash::make('doe')
            )
        );

        DB::table('users')->insert($users);
    }    
}