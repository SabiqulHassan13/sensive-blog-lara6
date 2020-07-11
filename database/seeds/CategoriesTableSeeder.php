<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  category factory manual
        $categories = [
            'Life style', 'shopping', 'travel', 'food',
        ];

        foreach ($categories as $category) {
            App\Category::create([
                'name' => $category,
                'slug' => Str::slug($category),
            ]);
        }

    }
}
