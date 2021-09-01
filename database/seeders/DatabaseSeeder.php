<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $dados_usuarios_admin = [
            'name' => 'sidiney',
            'email' => 'teste@teste',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => bcrypt('nada123123'),
            'remember_token' => Str::random(10)
        ];
        
        //User::create($dados_usuarios_admin);
        User::factory(15)->create();
        
    }
}
