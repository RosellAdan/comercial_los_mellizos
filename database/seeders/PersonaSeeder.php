<?php

namespace Database\Seeders;

use App\Models\Persona;
use App\Models\personal;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personal = new personal();
        $personal->ci = '1';
        $personal->nombre = 'Administrador';
        $personal->apellido = 'del sistema';
        $personal->direccion = 'administracion@gmail.com';
        $personal->celular = '9083752';
        $personal->sexo = 'M';
        $personal->save();
    }
}
