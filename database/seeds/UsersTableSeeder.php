<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            "name" =>  "วรรณภัสสรณ์ แก้วประดิษฐ์",
            "email" => "nurse@email.com",
            "uid" => genUser(1),
            "password" => bcrypt("123456")
        ]);
    }
}