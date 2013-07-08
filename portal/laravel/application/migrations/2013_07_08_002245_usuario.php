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
			$tabla->increments('id_usuario'); // Su rut
			$tabla->text('nombre',255);
			$tabla->text('apellido_paterno',255);
			$tabla->text('apellido_materno',255);
			$tabla->text('fecha_nacimiento',255);
			$tabla->text('nacionalidad',255);
			$tabla->string('correo',255)->unique();
			$tabla->integer('fono');
			$tabla->integer('fax')->nullable();
			$tabla->text('jerarquia_academica',255);
			$tabla->text('función',255);
			$tabla->text('jornada',255);
			$tabla->text('region',255)->nullable();
			$tabla->text('ciudad',255)->nullable();
			$tabla->text('direccion_particular',255);
			$tabla->string('comentario',255)->nullable();
			$tabla->boolean('activo'); //si está actualmente contratado o no
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