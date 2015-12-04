<?php
	/**
	*
	*
	* Session: Guarda informacion de la sesion
	* @author: Adria
	*
	*
	*
	**/


	//Creamos la clase sesion
	class Session{
		
		//Funcion para crear la session
		static function iniciar()
		{
			session_start();
			//echo 'Sesion iniciada</br>';
			//echo 'session_id:'.session_id().'</br>';
		}

		//Funcion para meter valores en la sesion
		static function set($name, $value)
		{
			$_SESSION[$name]=$value;
		}

		//Funcion para devolver la sesion
		static function get($name)
		{
			if (isset ( $_SESSION [$name] ))
			{
				return $_SESSION [$name];
			}
			else 
			{
				return false;
			}
		}

		//Funcion para finalizar la sesion
		static function borrar($name)
		{
			unset ( $_SESSION [$name] );
			//echo 'Borrados datos de la sesion</br>';
		}
		//Funcion para finalizar la sesion
		static function finalizar()
		{
			$_SESSION=array();
			session_destroy();
			//echo 'Sesion finalizada</br>';
		}
	}