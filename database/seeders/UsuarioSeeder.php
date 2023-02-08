<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $usuario = new Usuario();
        // $usuario->login = 'admin';
        // $usuario->password = bcrypt('admin');
        // $usuario->save();

        Usuario::factory(2)->create();
    }
}
