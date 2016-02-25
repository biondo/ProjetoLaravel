<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \CodeProject\Entities\Project::truncate(); //apaga todos os registros da tabela
        factory(\CodeProject\Entities\User::class)->create([
            'name' => 'Jorge',
            'email' => 'jorgebiondo18@gmail.com',
            'password' => bcrypt(1234),
            'remember_token' => str_random(10),
        ]);
        factory(\CodeProject\Entities\User::class, 10)->create(); //cria novos registros
    }
}
