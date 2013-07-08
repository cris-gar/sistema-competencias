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
			$tabla->increments('id_estudio');
			$tabla->text('nombre'); // Nombre del estudio, obvio
			$tabla->string('descripcion', 255); // Describa brevemente qué hizo
			$tabla->date('fecha_inicio');
			$tabla->boolean('situacion'); // falso como cursando
			$tabla->string('ubicacion'); // Dónde lo hizo
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