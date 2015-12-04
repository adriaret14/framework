<?php
	spl_autoload_register(null, false);
	spl_autoload_register('autoloader::SysLoader');
	spl_autoload_register('autoloader::ContLoader');
	spl_autoload_register('autoloader::ModelLoader');
	spl_autoload_register('autoloader::ViewLoader');

	class autoloader{

		//autoloader de Sys
		static function SysLoader($class)
		{
			$filename=strtolower($class).'.php';
			$file=ROOT.'sys'.DS.$filename;
			//echo $file;
			if(!file_exists($file))
			{
				return false;
			}
			require $file;
		}

		//autoloader de controllers
		static function ContLoader($class)
		{
			$filename=strtolower($class).'.php';
			$file=APP.'controllers'.DS.$filename;
			//echo $file;
			if(!file_exists($file))
			{
				return false;
			}
			require $file;
		}

		//autoload de models
		static function ModelLoader($class)
		{
			$filename=strtolower($class).'.php';
			$file=APP.'models'.DS.$filename;
			//echo $file;
			if(!file_exists($file))
			{
				return false;
			}
			require $file;
		}

		//autoload de views
		static function ViewLoader($class)
		{	
			//preparas la ruta del fichero 
			$filename=strtolower($class).'.php';
			$file=APP.'views'.DS.$filename;	//ROOT es raiz del directorio, APP es la carpeta apps, DS es la barra de ficheros el sistema nativo
			//echo $file;
			if(!file_exists($file))
			{
				return false;
			}
			require $file;
		}
	}
	/**
	*
	*
	* Coder
	* Facilita el var_dump
	* @author Adria
	*
	*
	*/

	class coder{
		static function code($var)
		{
			echo '<pre>'.$var.'</pre>';
		}
		static function codear($var)
		{
			echo '<pre>'.var_dump($var).'</pre>';
		}
	}