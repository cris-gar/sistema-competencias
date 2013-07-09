<?php

class Curriculum {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
		public function up()
	{
		//
		Schema::create('curriculum', function ($tabla){
			//$tabla->increments('id');
			$tabla->foreign('rut_id')->references('rut')->on('usuario')->onDelete('cascade');
			$tabla->foreign('nombre')->references('nombre')->on('usuario')->onDelete('cascade');
			$tabla->foreign('apellido_paterno')->references('apellido_paterno')->on('usuario')->onDelete('cascade');
			$tabla->foreign('apellido_materno')->references('apellido_materno')->on('usuario')->onDelete('cascade');
			$tabla->foreign('fecha_nacimiento')->references('fecha_nacimiento')->on('usuario')->onDelete('cascade');
			$tabla->foreign('nacionalidad')->references('nacionalidad')->on('usuario')->onDelete('cascade');
			$tabla->foreign('id_estudio')->references('id')->on('estudio')->onDelete('cascade');
			$tabla->foreign('descripcion')->references('descripcion')->on('estudio')->onDelete('cascade');
            $tabla->foreign('anio_inicio')->references('fecha_inicio')->on('estudio')->onDelete('cascade');
            $tabla->foreign('ubicacion')->references('ubicacion')->on('estudio')->onDelete('cascade');
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
		Schema::drop('curriculum');
	}

}