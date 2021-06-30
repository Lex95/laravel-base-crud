<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comic::truncate();
        $comicsList = config("comics");

        foreach($comicsList as $comic) {
            $newComic = new Comic;
            $newComic->fill($comic);

            $newComic->save();
        }
    }
}
