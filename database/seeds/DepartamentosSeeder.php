<?php

use Illuminate\Database\Seeder;
use App\Models\Departamento;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::Insert([
            [
                'nombre' => 'Tecnologia'
            ],
            [
                'nombre' => 'Administracion'
            ],
            [
                'nombre' => 'Finanzas'
            ]
        ]);
    }
}
