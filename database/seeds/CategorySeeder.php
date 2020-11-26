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
            'slug' => strtolower(Str::slug('Roses', '-')),
            'name' => 'Roses',
            'thumbnail' => 'images/roses.jpeg',
        ]);

        DB::table('categories')->insert([
            'slug' => strtolower(Str::slug('Birthday Bouquet', '-')),
            'name' => 'Birthday Bouquet',
            'thumbnail' => 'images/birthdaybouquet.jpeg',
        ]);

        DB::table('categories')->insert([
            'slug' => strtolower(Str::slug('Daisies', '-')),
            'name' => 'Daisies',
            'thumbnail' => 'images/daisies.jpeg',
        ]);

        DB::table('categories')->insert([
            'slug' => strtolower(Str::slug('Plant', '-')),
            'name' => 'Plant',
            'thumbnail' => 'images/plant.jpeg',
        ]);
    }
}
