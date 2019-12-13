<?php

use Illuminate\Database\Seeder;
use App\Models\EmpleadoProyecto;
class ColaboracionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(EmpleadoProyecto::class, 15)->create();
    }
}
