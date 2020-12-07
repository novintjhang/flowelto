<?php

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
        DB::table('users')->insert([
            'username' => 'manager',
            'email' => 'admin@admin.com',
            'type_id' => 2,
            'password' => Hash::make('12345678'),
            'gender' => 'M',
            'dob' => '2000-01-11',
            'address' => 'kalimantan barat',
        ]);

        DB::table('users')->insert([
            'username' => 'user',
            'email' => 'user@user.com',
            'type_id' => 1,
            'password' => Hash::make('12345678'),
            'gender' => 'M',
            'dob' => '2000-01-11',
            'address' => 'kalimantan barat',
        ]);
    }
}
