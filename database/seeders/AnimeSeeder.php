<?php

namespace Database\Seeders;

use App\Models\Anime;
use Illuminate\Database\Seeder;

class AnimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anime::create([
            'judul' => 'Relife',
            'tgl_rilis' => '2017-04-15',
            'studio' => 'TMS Entertainment'
        ]);
        
        Anime::create([
            'judul' => 'No Game No Live',
            'tgl_rilis' => '2017-10-25',
            'studio' => ' Madhouse'
        ]);
        
    }
}
