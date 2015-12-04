<?php
require 'sys/request.php';
class Core{
	static private $controller;
	static private $action;

		static function init(){
			//echo 'CORE arrenca app';
			//recuperar la request
				//echo $_SERVER['REQUEST_URI'];
				Request::retrieve();
				$controller=Request::getCont();
				//ayuda en los errores
				self::$controller=$controller;
				//coder::code($controller);
				$action=Request::getAct();
				//ayuda en los errores
				self::$action=$action;
				//coder::code($action);
				$params=Request::getParams();
				//Printamos los parametros
				//print_r($params);
				//ayuda en los errores
				//coder::codear($params);
				self::router();
		}

		static function router()
		{
			//echo 'Routing...';
			//Coder::code(self::$controller);
			//Coder::code(self::$action);
			//if exists the conroller then make an instance of controller
			//ROOT=raiz del proyecto
			//DS=barra "/" o "\" de la ruta
			//Preparamos la ruta del controlador


			$contr_call=(self::$controller!="")?self::$controller:'home';
			$action_call=(self::$action!="")?self::$action:'home';
			$filename=$contr_call.'.php';
			//self se usa para llamarse a si mismo
			$filecontroller=APP.'controllers'.DS.$filename;
			//Coder::code($filecontroller);

			if(is_readable($filecontroller))
			{
			$cont=new $contr_call();
			//comprobar si la accion es un metodo del objeto
			if(is_callable(array($cont, $action_call)))
			{
				call_user_func(array($cont, $action_call));
			}
			else
			{
				//No funcion
				echo 'No accion!';
			}
			//Coder::codear($cont);
			}
			else
			{
				//No controller
				echo 'No controlador!';
			}
		}
}