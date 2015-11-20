<?php
require 'sys/request.php';
class Core{

		static function init(){
			//echo 'CORE arrenca app';
			//recuperar la request
				//echo $_SERVER['REQUEST_URI'];
				Request::retrieve();
				$controller=Request::getCont();
				//ayuda en los errores
				coder::code($controller);
				$action=Request::getAct();
				//ayuda en los errores
				coder::code($action);
				$params=Request::getParams();
				//Printamos los parametros
				print_r($params);
				//ayuda en los errores
				coder::codear($params);
		}
}