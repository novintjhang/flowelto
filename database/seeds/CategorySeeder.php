<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'slug' => strtolower(Str::slug('TEST', '-')),
            'name' => 'TEST',
            'thumbnail' => 'default.svg',
        ]);

        DB::table('categories')->insert([
            'slug' => strtolower(Str::slug('TEST2', '-')),
            'name' => 'TEST2',
            'thumbnail' => 'default.svg',
        ]);

        DB::table('categories')->insert([
            'slug' => strtolower(Str::slug('TEST3', '-')),
            'name' => 'TEST3',
            'thumbnail' => 'default.svg',
        ]);

        DB::table('categories')->insert([
            'slug' => strtolower(Str::slug('TEST4', '-')),
            'name' => 'TEST4',
            'thumbnail' => 'default.svg',
        ]);
    }
}
