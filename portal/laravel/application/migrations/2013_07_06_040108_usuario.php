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
			$tabla->increments('id');
			$tabla->text('nombre',255);
			$tabla->text('apellido_paterno',255);
			$tabla->text('apellido_materno',255);
			$tabla->text('fecha_nacimiento',255);
			$tabla->text('nacionalidad',255);
			$tabla->string('correo',255)->unique();
			$tabla->string('comentario',255)->nullable();
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