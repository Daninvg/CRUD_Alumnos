<?php

use App\Models\Alumnos;
use Tests\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;

uses(TestCase::class, RefreshDatabase::class);

test('muestra listado de alumnos', function () {
    $alumno = Alumnos::factory()->create();

    $this->get(route('alumno.index'))
        ->assertSeeInOrder(['Nombre', 'Codigo', 'Correo institucional', 
        'Fecha de nacimiento','Sexo','Carrera'])
        ->assertSee($alumno->nombre)
        ->assertStatus(200);
});

test('muestra formulario de creación de alumnos', function () {
    $this->get(route('alumno.create'))
        ->assertSeeInOrder(['Nombre', 'Codigo', 'Correo', 
        'Fecha de nacimiento','Sexo','Carrera'])
        ->assertStatus(200);
});

test('crea un alumno', function () {
    $alumno = Alumnos::factory()->make();

    $this->post(route('alumno.store'), $alumno->toArray())
        ->assertRedirect(route('alumno.index'));

    $this->assertDatabaseHas('alumnos', [
        'nombre' => $alumno->nombre,
        'codigo' => $alumno->codigo, 
        'correo' => $alumno->correo, 
        'fecha_nacimiento' => $alumno->fecha_nacimiento, 
        'sexo' => $alumno->sexo, 
        'carrera' => $alumno->carrera 
    ]);

    $this->get(route('alumno.index'))
        ->assertSee($alumno->nombre);
});

test('verifica errores al crear un nuevo alumno', function () {
    $alumno = Alumnos::factory()->make([
        'nombre' => '',
        'codigo' => '',
        'correo' => '',
        'fecha_nacimiento' => '',
        'sexo' => '',
        'carrera' => '',
    ]);

    $this->post(route('alumno.store'), $alumno->toArray())
        ->assertInvalid(['nombre', 'codigo', 'correo', 'fecha_nacimiento', 
        'sexo', 'carrera']);

    $this->assertDatabaseMissing('alumnos', [
        'nombre' => $alumno->nombre,
        'codigo' => $alumno->codigo, 
        'correo' => $alumno->correo, 
        'fecha_nacimiento' => $alumno->fecha_nacimiento, 
        'sexo' => $alumno->sexo, 
        'carrera' => $alumno->carrera 
    ]);
});
