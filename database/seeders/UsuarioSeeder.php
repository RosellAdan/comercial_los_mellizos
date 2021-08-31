<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {
        $user = new User();
        $user->name = 'administrador';
        $user->email = 'administrador@gmail.com';
        $user->password = bcrypt('administrador');
        $user->id_persona = '1';
        $user->save();
    }

}
