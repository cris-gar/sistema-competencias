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
			$tabla->increments('id_estudio')->onDelete('cascade');
			$tabla->text('nombre')->onDelete('cascade'); // Nombre del estudio, obvio
			$tabla->string('descripcion', 255)->onDelete('cascade'); // Describa brevemente qué hizo
			$tabla->date('fecha_inicio')->onDelete('cascade'); //
			$tabla->boolean('situacion')->onDelete('cascade'); // falso como cursando
			$tabla->string('ubicacion')->onDelete('cascade'); // Dónde lo hizo
			//$table->foreign('id_usuario')->references('id')->on('usuario');
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