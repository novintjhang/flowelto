<?php

use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'name' => 'USER',
        ]);

        DB::table('user_types')->insert([
            'name' => 'MANAGER',
        ]);
    }
}
