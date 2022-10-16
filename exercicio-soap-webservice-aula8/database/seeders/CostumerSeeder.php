<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CostumerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("costumers")->insert([
            "name" => "Nome completo",
            "email" => "teste@teste.com.br",
            "password" => Hash::make("12345"),
            "field" => "I.T",
            "salary" => 4200.78,
            "cpf" => "11111111111",
            "rg" => "111111111",
            "atribuitions" => "Programer",
            "start_on_company" => "2022-01-01 00:00:00",
            "birthdate" => "2022-01-01 00:00:00"
        ]);
    }
}
