<?php

use Illuminate\Database\Seeder;

class PerfilUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfil_usuarios')->insert(['nome' => 'Usuario']);
        DB::table('perfil_usuarios')->insert(['nome' => 'Administrador']);
    }
}
