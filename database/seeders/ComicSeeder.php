<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Admin\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comicsData = config('comics');
        // dd($comicsData);
        Comic::truncate();
        foreach ($comicsData as $singleComic) {
            $comic = new Comic();
            $comic->title = $singleComic['title'];
            $comic->description = $singleComic['description'];
            $comic->thumb = $singleComic['thumb'];
            //sostituisco il carattere speciale con spazio vuoto
            $replacedTextPrice = str_replace('$', '', $singleComic['price']);
            $comic->price = floatval($replacedTextPrice);
            $comic->series = $singleComic['series'];
            $comic->sale_date = $singleComic['sale_date'];
            $comic->type = $singleComic['type'];
            $comic->artists = json_encode($singleComic['artists']);
            $comic->writers = json_encode($singleComic['writers']);
            $comic->save();

        }
    }
}
