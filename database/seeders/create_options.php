<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class create_options extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert(['title' => 'Aniversário de nascimento', 'group' => 'OCC']);
        DB::table('options')->insert(['title' => 'Aniversário de casamento', 'group' => 'OCC']);
        DB::table('options')->insert(['title' => 'Aniversário de namoro', 'group' => 'OCC']);
        DB::table('options')->insert(['title' => 'Aniversário de noivado', 'group' => 'OCC']);
        DB::table('options')->insert(['title' => 'Bodas', 'group' => 'OCC']);
        DB::table('options')->insert(['title' => 'Uma surpresa', 'group' => 'OCC']);
        DB::table('options')->insert(['title' => '5 - 19 reais', 'group' => 'PRC']);
        DB::table('options')->insert(['title' => '20 - 34 reais', 'group' => 'PRC']);
        DB::table('options')->insert(['title' => '35 - 49 reais', 'group' => 'PRC']);
        DB::table('options')->insert(['title' => '50 - 74 reais', 'group' => 'PRC']);
        DB::table('options')->insert(['title' => '75 - 99 reais', 'group' => 'PRC']);
        DB::table('options')->insert(['title' => '100 - 149 reais', 'group' => 'PRC']);
        DB::table('options')->insert(['title' => '150 - 199 reais', 'group' => 'PRC']);
        DB::table('options')->insert(['title' => '200 - 499 reais', 'group' => 'PRC']);
        DB::table('options')->insert(['title' => '500 - 799 reais', 'group' => 'PRC']);
        DB::table('options')->insert(['title' => '800 - 1199 reais', 'group' => 'PRC']);
        DB::table('options')->insert(['title' => '1200 - 1999 reais', 'group' => 'PRC']);
        DB::table('options')->insert(['title' => '2000 - 2999 reais', 'group' => 'PRC']);
        DB::table('options')->insert(['title' => 'mais de 3000 reais', 'group' => 'PRC']);
        DB::table('options')->insert(['title' => 'Esporte', 'group' => 'THM']);
        DB::table('options')->insert(['title' => 'Tecnologia', 'group' => 'THM']);
        DB::table('options')->insert(['title' => 'Cozinha', 'group' => 'THM']);
        DB::table('options')->insert(['title' => 'Música', 'group' => 'THM']);
        DB::table('options')->insert(['title' => 'Netflix', 'group' => 'THM']);
        DB::table('options')->insert(['title' => 'Natureza', 'group' => 'THM']);
        DB::table('options')->insert(['title' => 'Zen', 'group' => 'THM']);
        DB::table('options')->insert(['title' => 'Vegano', 'group' => 'THM']);
        DB::table('options')->insert(['title' => 'Anime', 'group' => 'THM']);
        DB::table('options')->insert(['title' => '0 - 2 anos', 'group' => 'AGE']);
        DB::table('options')->insert(['title' => '3 - 5 anos', 'group' => 'AGE']);
        DB::table('options')->insert(['title' => '6 - 10 anos', 'group' => 'AGE']);
        DB::table('options')->insert(['title' => '11 - 16 anos', 'group' => 'AGE']);
        DB::table('options')->insert(['title' => '17 - 24 anos', 'group' => 'AGE']);
        DB::table('options')->insert(['title' => '25 - 34 anos', 'group' => 'AGE']);
        DB::table('options')->insert(['title' => '35 - 40 anos', 'group' => 'AGE']);
        DB::table('options')->insert(['title' => '41 - 45 anos', 'group' => 'AGE']);
        DB::table('options')->insert(['title' => '46 - 50 anos', 'group' => 'AGE']);
        DB::table('options')->insert(['title' => '51 - 55 anos', 'group' => 'AGE']);
        DB::table('options')->insert(['title' => '56 - 60 anos', 'group' => 'AGE']);
        DB::table('options')->insert(['title' => '61 - 65 anos', 'group' => 'AGE']);
        DB::table('options')->insert(['title' => '66 - 70 anos', 'group' => 'AGE']);
        DB::table('options')->insert(['title' => 'mais de 70 anos', 'group' => 'AGE']);
        DB::table('options')->insert(['title' => 'Não está trabalhando ou não sei', 'group' => 'SGM']);
        DB::table('options')->insert(['title' => 'Serviço', 'group' => 'SGM']);
        DB::table('options')->insert(['title' => 'Indústria', 'group' => 'SGM']);
        DB::table('options')->insert(['title' => 'Comércio', 'group' => 'SGM']);
        DB::table('options')->insert(['title' => 'Não sei', 'group' => 'RLX']);
        DB::table('options')->insert(['title' => 'Em uma cachoeira', 'group' => 'RLX']);
        DB::table('options')->insert(['title' => 'Em uma cadeira de praia', 'group' => 'RLX']);
        DB::table('options')->insert(['title' => 'Em uma rede', 'group' => 'RLX']);
        DB::table('options')->insert(['title' => 'Com uma bebida especial', 'group' => 'RLX']);
        DB::table('options')->insert(['title' => 'Não sei', 'group' => 'SXO']);
        DB::table('options')->insert(['title' => 'Hétero', 'group' => 'SXO']);
        DB::table('options')->insert(['title' => 'Lésbica', 'group' => 'SXO']);
        DB::table('options')->insert(['title' => 'Gay', 'group' => 'SXO']);
        DB::table('options')->insert(['title' => 'Bissexual', 'group' => 'SXO']);
        DB::table('options')->insert(['title' => 'Transsexual', 'group' => 'SXO']);
        DB::table('options')->insert(['title' => 'Travesti', 'group' => 'SXO']);
        DB::table('options')->insert(['title' => 'Queer', 'group' => 'SXO']);
        DB::table('options')->insert(['title' => 'Intersexo', 'group' => 'SXO']);
        DB::table('options')->insert(['title' => 'Assexuad@', 'group' => 'SXO']);
        DB::table('options')->insert(['title' => 'Não sei', 'group' => 'SGN']);
        DB::table('options')->insert(['title' => 'Áries: de 21 de março a 20 de abril', 'group' => 'SGN']);
        DB::table('options')->insert(['title' => 'Touro: de 21 de abril a 20 de maio', 'group' => 'SGN']);
        DB::table('options')->insert(['title' => 'Gêmeos: de 21 de maio a 20 de junho', 'group' => 'SGN']);
        DB::table('options')->insert(['title' => 'Câncer: de 21 de junho a 22 de julho', 'group' => 'SGN']);
        DB::table('options')->insert(['title' => 'Leão: de 23 de julho a 22 de agosto', 'group' => 'SGN']);
        DB::table('options')->insert(['title' => 'Virgem: de 23 de agosto a 22 de setembro', 'group' => 'SGN']);
        DB::table('options')->insert(['title' => 'Libra: de 23 de setembro a 22 de outubro', 'group' => 'SGN']);
        DB::table('options')->insert(['title' => 'Escorpião: de 23 de outubro a 21 de novembro', 'group' => 'SGN']);
        DB::table('options')->insert(['title' => 'Sagitário: de 22 de novembro a 21 de dezembro', 'group' => 'SGN']);
        DB::table('options')->insert(['title' => 'Capricórnio: de 22 de dezembro a 20 de janeiro', 'group' => 'SGN']);
        DB::table('options')->insert(['title' => 'Aquário: de 21 de janeiro a 18 de fevereiro', 'group' => 'SGN']);
        DB::table('options')->insert(['title' => 'Peixes: de 19 de fevereiro a 20 de março', 'group' => 'SGN']);
        DB::table('options')->insert(['title' => 'RO', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'AC', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'AM', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'RR', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'PA', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'AP', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'TO', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'MA', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'PI', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'CE', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'RN', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'PB', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'PE', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'AL', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'SE', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'BA', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'MG', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'ES', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'RJ', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'SP', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'PR', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'SC', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'RS', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'MS', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'MT', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'GO', 'group' => 'STE']);
        DB::table('options')->insert(['title' => 'DF', 'group' => 'STE']);
    }
}
