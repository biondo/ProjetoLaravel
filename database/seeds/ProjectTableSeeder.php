<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \CodeProject\Entities\Project::truncate(); //apaga todos os registros da tabela
        factory(\CodeProject\Entities\Project::class, 10)->create(); //cria novos registros
    }
}
