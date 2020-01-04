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
            'email'=>'admin@admin.com',
            'password'=>bcrypt('1234'),
            'level'=>'Administrator'
        ]);
        App\User::create([
            'name'=>'Sample User',
            'email'=>'user@user.com',
            'password'=>bcrypt('1234'),
            'level'=>'User'
        ]);
    }
}
