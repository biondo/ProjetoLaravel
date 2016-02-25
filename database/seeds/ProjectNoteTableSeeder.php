<?php

use Illuminate\Database\Seeder;

class ProjectNoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \CodeProject\Entities\Project::truncate(); //apaga todos os registros da tabela
        factory(\CodeProject\Entities\ProjectNote::class, 50)->create(); //cria novos registros
    }
}
