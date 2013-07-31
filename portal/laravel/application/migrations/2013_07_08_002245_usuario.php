<?php

class Usuario {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('usuario', function ($tabla){
			$tabla->primary('id_rut')->onDelete('cascade'); // Su rut
			$tabla->text('nombre',255)->onDelete('cascade');
			$tabla->text('apellido_paterno',255)->onDelete('cascade');
			$tabla->text('apellido_materno',255)->onDelete('cascade');
			$tabla->date('fecha_nacimiento',255)->onDelete('cascade');
			$tabla->text('nacionalidad',255)->onDelete('cascade');
			$tabla->string('correo',255)->unique()->onDelete('cascade');
			$tabla->integer('fono')->onDelete('cascade');
			$tabla->text('jerarquia_academica',255)->onDelete('cascade');
			$tabla->text('funcion',255)->onDelete('cascade');
			$tabla->text('jornada',255)->onDelete('cascade');
			$tabla->text('region',255)->nullable()->onDelete('cascade');
			$tabla->text('ciudad',255)->nullable()->onDelete('cascade');
			$tabla->text('direccion_particular',255)->onDelete('cascade');
			$tabla->string('formacion_academica')->nullable()->onDelete('cascade');
			$tabla->string('trabajo_actual')->nullable()->onDelete('cascade');
			$tabla->string('cargos_académicos')->nullable()->onDelete('cascade');
			$tabla->string('cargos_empresas')->nullable()->onDelete('cascade');
			$tabla->string('participación_proyectos_ac_em')->nullable()->onDelete('cascade');
			$tabla->string('lineas_desarrollo')->nullable()->onDelete('cascade'); /*Comentarios por el mismo académico*/
			$tabla->boolean('activo')->onDelete('cascade'); //si está actualmente contratado o no
		});

	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('usuario');
	}

}