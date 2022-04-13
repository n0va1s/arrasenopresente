<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class new_options_hint extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert(['title' => 'Bônus', 'group' => 'HNT']);
        DB::table('options')->insert(['title' => 'Serviço', 'group' => 'HNT']);
        DB::table('options')->insert(['title' => 'Produto', 'group' => 'HNT']);
    }
}
