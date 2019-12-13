<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('DepartamentosSeeder');
        $this->call('EmpleadosSeeder');
        $this->call('ProyectosSeeder');
        $this->call('ColaboracionesSeeder');
    }
}
