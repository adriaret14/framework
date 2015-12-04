<?php
	//primer paso
	ini_set('display_errors','on');
	//informe de errores
	error_reporting(E_ALL);
	
	include 'config.php';
	require 'sys/helper.php';
	//require 'sys/Registry.php';
	//require 'sys/Session.php';
	//leyendo la configuracion

	//Llamamos al metodo estatico de la clase sesion para iniciarla
	Session::iniciar();
	//Creamos una nueva sesion e introducimos los valores de ella
	Session::set("Adria", "Probando una sesion");
	//Ahora guardamos los valores de esta sesion ya que queremos recuperarla
	$ses=Session::get("Adria");
	//La mostramos por pantalla con la clase creada previamente (nos ayuda a depurar errores)
	//coder para ver si se muestran los datos correctamente
	//Coder::codear($ses);
	//Borramos los datos de la sesion
	Session::borrar("Adria");
	//Finalizamos la sesion
	Session::finalizar();

	$conf=Registry::getInstance();
	$conf->Welcome='Hola';
	$msg=$conf->Welcome;
	//esto si lo activo borra la variable del registry i da error al ejecutar con el Coder
	//unset($conf);
	//Coder::codear($msg);

	//Coder::codear($conf);
	Core::init();
