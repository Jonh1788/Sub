<?php

namespace Database\Seeders;

use App\Models\Appconfig;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AppconfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 1000; $i++) {
            Appconfig::create([
                'id' => $faker->uuid,
                'nome' => $faker->name,
                'email' => $faker->email,
                'senha' => bcrypt($faker->password),
                'cpf' => $faker->randomNumber,
                'telefone' => $faker->phoneNumber,
                'saldo' => $faker->randomFloat(2, 0, 1000),
                'jogoteste' => $faker->boolean,
                'linkafiliado' => $faker->url,
                'depositou' => $faker->boolean,
                'lead_aff' => $faker->numberBetween(0, 10),
                'leads_ativos' => $faker->numberBetween(0, 5),
                'rollover1' => $faker->numberBetween(0, 20),
                'plano' => $faker->word,
                'demo' => $faker->boolean,
                'bloc' => $faker->boolean,
                'sacou' => $faker->boolean,
                'indicados' => $faker->numberBetween(0, 5),
                'saldo_comissao' => $faker->randomFloat(2, 0, 500),
                'percas' => $faker->numberBetween(0, 10),
                'ganhos' => $faker->randomFloat(2, 0, 1000),
                'cpa' => $faker->boolean,
                'cpafake' => $faker->boolean,
                'jogo_demo' => $faker->boolean,
                'comissaofake' => $faker->boolean,
                'saldo_cpa' => $faker->randomFloat(2, 0, 500),
                'primeiro_deposito' => $faker->boolean,
                'status_primeiro_deposito' => $faker->randomElement(['pendente', 'concluido']),
                'cont_cpa' => $faker->numberBetween(0, 5),
                'data_cadastro' => $faker->dateTimeBetween('-1 year', 'now'),
                'afiliado' => $faker->word,
                'utm_source' => $faker->word,
                'utm_medium' => $faker->word,
                'utm_campaign' => $faker->word,
            ]);
        }
    }
}
