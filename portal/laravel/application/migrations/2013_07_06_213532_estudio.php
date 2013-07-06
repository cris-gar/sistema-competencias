<?php

class Estudio {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// código para crear la tabla estudio
		Schema::create('estudio', function ($tabla){
			$tabla->increments('id');
			$tabla->text('nombre');
			$tabla->string('descripcion', 255);
			$tabla->date('fecha_inicio');
			$tabla->boolean('situacion');
			$tabla->string('ubicacion');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		// código para eliminar la tabla
		Schema::drop('estudio');
	}

}