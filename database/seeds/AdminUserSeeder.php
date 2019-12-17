<?php

use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'=>'Web Admin',
            'email'=>'samuelmwangi729@gmail.com',
            'password'=>bcrypt('P!@#four5sam'),
            'level'=>'Administrator'
        ]);
    }
}
