<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    public function run()
    {
        $empleados = [
            [
                'nombre' => 'Juan',
                'apellido' => 'Pérez',
                'correo' => 'juan.perez@empresa.com',
                'salario' => 2500.00
            ],
            [
                'nombre' => 'María',
                'apellido' => 'González',
                'correo' => 'maria.gonzalez@empresa.com',
                'salario' => 2800.50
            ],
            [
                'nombre' => 'Carlos',
                'apellido' => 'López',
                'correo' => 'carlos.lopez@empresa.com',
                'salario' => 3200.75
            ],
            [
                'nombre' => 'Ana',
                'apellido' => 'Martínez',
                'correo' => 'ana.martinez@empresa.com',
                'salario' => 2700.00
            ],
            [
                'nombre' => 'Luis',
                'apellido' => 'Rodríguez',
                'correo' => 'luis.rodriguez@empresa.com',
                'salario' => 3100.25
            ],
            [
                'nombre' => 'Laura',
                'apellido' => 'Hernández',
                'correo' => 'laura.hernandez@empresa.com',
                'salario' => 2900.80
            ],
            [
                'nombre' => 'Pedro',
                'apellido' => 'Sánchez',
                'correo' => 'pedro.sanchez@empresa.com',
                'salario' => 3300.00
            ],
            [
                'nombre' => 'Sofia',
                'apellido' => 'Ramírez',
                'correo' => 'sofia.ramirez@empresa.com',
                'salario' => 2600.90
            ],
            [
                'nombre' => 'Diego',
                'apellido' => 'Torres',
                'correo' => 'diego.torres@empresa.com',
                'salario' => 3000.60
            ],
            [
                'nombre' => 'Elena',
                'apellido' => 'Flores',
                'correo' => 'elena.flores@empresa.com',
                'salario' => 2750.40
            ]
        ];

        foreach ($empleados as $empleado) {
            Empleado::create($empleado);
        }
    }
}