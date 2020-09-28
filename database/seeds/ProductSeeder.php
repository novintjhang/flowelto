<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'slug' => strtolower(Str::slug('TEST2', '-')),
            'name' => 'TEST2',
            'thumbnail' => 'default.svg',
            'category_id' => 1,
            'price' => 100000,
            'description' => 'TEST',
        ]);
    }
}
