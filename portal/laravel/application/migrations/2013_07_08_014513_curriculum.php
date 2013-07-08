<?php

class Curriculum {
	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		// código para crear la tabla estudio
		Schema::create('curriculum', function ($tabla){
			$tabla->increments('id_curriculum');
			$tabla->string('formacion_academica');
			$tabla->string('institucion_reparticion');// trabajo actual
			$tabla->string('cargo', 255);// trabajo actual
			$tabla->string('direccion_c');// trabajo actual
			$tabla->string('ciudad_c');// trabajo actual
			$tabla->string('region_c'); // trabajo actual
			$tabla->string('cargos_academicos') // que ha tenido
			$tabla->string('cargos_empresas') // que ha tenido
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
		Schema::drop('curriculum');
	}

}