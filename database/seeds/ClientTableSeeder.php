<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \CodeProject\Entities\Client::truncate(); //apaga todos os registros da tabela
        factory(\CodeProject\Entities\Client::class, 10)->create(); //cria novos registros
    }
}
