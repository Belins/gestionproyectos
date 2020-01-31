<?php

use Illuminate\Database\Seeder;
use App\Models\Departamento;

class AddJefeDepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamentos = Departamento::All();
        foreach($departamentos as $departamento)
        {
        	$departamento->empleado_id = rand(1, 10);
        	$departamento->save();
        }
    }
}
