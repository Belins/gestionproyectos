<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Empleado;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(Empleado::class,10)->create();

        /*Empleado::Insert([
            [
                'nombre' => 'David',
                'apellido' => 'Belinchon',
                'email' => 'dbelinchonal18dw@ikzubirimanteo.com',
                'telefono' => '645885276'
            ],
            [
                'nombre' => Str::random(10),
                'apellido' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'telefono' => '645885276'
            ],
            [
                'nombre' => Str::random(10),
                'apellido' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'telefono' => '645885276'
            ],
            [
                'nombre' => Str::random(10),
                'apellido' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'telefono' => '645885276'
            ],
            [
                'nombre' => Str::random(10),
                'apellido' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'telefono' => '645885276'
            ],
            [
                'nombre' => Str::random(10),
                'apellido' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'telefono' => '645885276'
            ],
            [
                'nombre' => Str::random(10),
                'apellido' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'telefono' => '645885276'
            ],
            [
                'nombre' => Str::random(10),
                'apellido' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'telefono' => '645885276'
            ],
            [
                'nombre' => Str::random(10),
                'apellido' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'telefono' => '645885276'
            ],
            [
                'nombre' => Str::random(10),
                'apellido' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'telefono' => '645885276'
            ]
            
        ]);*/
        
    }
}
