<?php

class Cuenta_Controller extends Base_Controller {

    public function action_index() {
        return View::make('cuenta.index');
    }

    public function action_login() {
        echo Form::open('cuenta/pruebabd');
        //<!--Nombre de usuario-->
        echo Form::label('usuario', 'Usuario');
        echo Form::text('usuario');
        // <!--Contraseña-->
        echo Form::label('password', 'Contraseña');
        echo Form::password('password');
        //<!--Botón de login-->
        echo Form::submit('Login');
        echo Form::close();
    }

    public function action_logout() {
        echo "Esta es la aación de cierre de sesión.";
    }

    public function action_bienvenida($nombre, $lugar) {
        return View::make('bienvenida')
                        ->with('nombre', $nombre)
                        ->with('lugar', $lugar);
    }

    public function action_hola() {

        echo URL::full();
        echo "<br>";
        //echo HTML::link('cuenta/login', 'Mi página');
         URL::to('cuenta/login');
    }

    public function action_perro() {
        echo URL::to_route('login', array(5, 7));
    }
    public function action_pruebabd(){
        $usuarios = DB::table('usuario')->get();

    }

}
