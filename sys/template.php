<?php

	/**
	*
	*
	*	Template : plantilla para hacer html
	*				Carga $contents y $data
	*	@author: Adria
	*
	*
	*
	*
	*/
	class Template
	{
		static function load($contents, $data=null)
		{
			if(is_array($data))
			{
				extract($data);
			}
			include APP.'templates'.DS.'plantilla1.php';
			include APP.'templates'.DS.$contents.'.php';
			include APP.'templates'.DS.'plantilla2.php';
		}
	}