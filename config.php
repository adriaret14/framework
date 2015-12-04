<?php

	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',realpath(dirname(__FILE__)).DS);
	//to access filesystem
	//Ahora definiremos la constante APP que es la ruta hasta la carpeta app
	define('APP',ROOT.'app'.DS);	
	//Para acceder a los links
	define('APP_W',basename(dirname($_SERVER['SCRIPT_NAME'])));