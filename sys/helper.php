<?php
	spl_autoload_register(null, false);
	spl_autoload_register('autoloader::SysLoader');
	class autoloader{
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