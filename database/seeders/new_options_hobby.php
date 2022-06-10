<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class new_options_hobby extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert(['title' => 'Esporte (corrida, ciclismo, natação)', 'group' => 'HBS']);
        DB::table('options')->insert(['title' => 'Autocuidado (yoga, mindfulness)', 'group' => 'HBS']);
        DB::table('options')->insert(['title' => 'Academia (crossfit, pilates)', 'group' => 'HBS']);
        DB::table('options')->insert(['title' => 'Aprendizado (leitura, videos)', 'group' => 'HBS']);
        DB::table('options')->insert(['title' => 'Natureza (trilha, jardinagem)', 'group' => 'HBS']);
        DB::table('options')->insert(['title' => 'Artes (pintura, teatro, fotografia)', 'group' => 'HBS']);
        DB::table('options')->insert(['title' => 'Música (canto, instrumento)', 'group' => 'HBS']);
        DB::table('options')->insert(['title' => 'Jogos (cartas, tabuleiro)', 'group' => 'HBS']);
        DB::table('options')->insert(['title' => 'Artes Marciais (karatê, judô)', 'group' => 'HBS']);
        DB::table('options')->insert(['title' => 'Cozinha (utensílios, decorçaão)', 'group' => 'HBS']);
        DB::table('options')->insert(['title' => 'Trabalho vountário (escotismo, causa)', 'group' => 'HBS']);
        DB::table('options')->insert(['title' => 'Dança (de salão, samba)', 'group' => 'HBS']);
        DB::table('options')->insert(['title' => 'Trabalho Manual (escultura, costura)', 'group' => 'HBS']);
        DB::table('options')->insert(['title' => 'Marítmo (surfe, vela)', 'group' => 'HBS']);
        DB::table('options')->insert(['title' => 'Digital (blog, podcast)', 'group' => 'HBS']);
        DB::table('options')->insert(['title' => 'Idioma (inglês, espanhol)', 'group' => 'HBS']);
        DB::table('options')->insert(['title' => 'Bebida (café, vinho, gin)', 'group' => 'HBS']);
        DB::table('options')->insert(['title' => 'Comida (cesta de café, churrasco)', 'group' => 'HBS']);
    }
}
