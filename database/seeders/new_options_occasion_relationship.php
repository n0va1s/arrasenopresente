<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class new_options_occasion_relationship extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert(['title' => 'Amiga/Amigo', 'group' => 'RLT']);
        DB::table('options')->insert(['title' => 'Chefe', 'group' => 'RLT']);
        DB::table('options')->insert(['title' => 'Colega de trabalho', 'group' => 'RLT']);
        DB::table('options')->insert(['title' => 'Crush', 'group' => 'RLT']);
        DB::table('options')->insert(['title' => 'Esposa/Esposo', 'group' => 'RLT']);
        DB::table('options')->insert(['title' => 'Filho/Enteado', 'group' => 'RLT']);
        DB::table('options')->insert(['title' => 'Pai/Mãe', 'group' => 'RLT']);
        DB::table('options')->insert(['title' => 'Namorada/Namorado', 'group' => 'RLT']);
        DB::table('options')->insert(['title' => 'Noiva/Noivo', 'group' => 'RLT']);
        DB::table('options')->insert(['title' => 'Tio/Primo/Cunhado', 'group' => 'RLT']);
        DB::table('options')->insert(['title' => 'Madrinha/Padrinho', 'group' => 'RLT']);

        DB::table('options')->insert(['title' => 'Dia das crianças', 'group' => 'OCC']);
        DB::table('options')->insert(['title' => 'Dia das mães', 'group' => 'OCC']);
        DB::table('options')->insert(['title' => 'Dia dos pais', 'group' => 'OCC']);
        DB::table('options')->insert(['title' => 'Dia dos namorados', 'group' => 'OCC']);
        DB::table('options')->insert(['title' => 'Natal', 'group' => 'OCC']);

        DB::table('options')->insert(['title' => 'Chá de casa nova', 'group' => 'OCC']);
        DB::table('options')->insert(['title' => 'Chá/Bar', 'group' => 'OCC']);
    }
}
