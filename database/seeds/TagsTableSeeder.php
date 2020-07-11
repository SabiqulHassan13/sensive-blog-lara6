<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  tag factory manual
        $tags = [
            'project', 'design', 'love', 'illustration',
        ];

        foreach ($tags as $tag) {
            App\Tag::create([
                'name' => $tag,
                'slug' => Str::slug($tag),
            ]);
        }

    }
}
