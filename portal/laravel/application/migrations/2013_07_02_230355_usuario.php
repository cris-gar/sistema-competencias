<?php

use Laravel\Database\Schema;

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
			$tabla->string('nombre',255);			
			$tabla->string('correo',255);						
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