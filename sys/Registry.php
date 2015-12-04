<?php

	/**
	*
	*
	* Registry: guarda informacion de navegacion
	*
	* @author Adria
	*
	*
	**/

	class Registry{
		private $data=array();
		static $instance;

		//metodo SINGLETON
		public static function getInstance(){
			//si no hay instancia
			if(!(self::$instance instanceof self)){
				self::$instance=new self();
				return self::$instance;
			}
			else
			{
				return self::$instance;
			}
		}

		function __construct(){
			$this->data=array();
			$this->load_conf();
		}

		//metodos __set y __get 
		//funciona como una array asociativa asi que necesitaremos ($key, $value)

		function __set($key, $value)
		{
			//Lo primero de todo es comprobar que la array no contenga informacion con lo que no permitiria sobreescribir el metodo
			if(!array_key_exists($key, $this->data))
			{
				//Guardamos la informacion en data y dado que es un array asociativo guardaremos el valor mediante la llave
				$this->data[$key]=$value;
			}
			
		}
		function __get($key)
		{
			//Lo primero de todo es comprobar que la array contenga informacion
			if(array_key_exists($key, $this->data))
			{
				//Devolvemos la array data con la llave como indice ya que con eso no saldra el valor
				return $this->data[$key];
			}
			else
			{
				return null;
			}
			
		}
		function __unset($key=null)
		{
			if($key!=null)
			{
				if(array_key_exists($key, $this->data))
				{
					//$idx=array_search($key, $this->data);
					unset($this->data[$key]);
				}
			}
			else
			{
				unset($this->data);
			}
		}

		function load_conf(){
			$file=APP.'Config.json';
			$json_str=file_get_contents($file);

			$array_json=json_decode($json_str);

			foreach ($array_json as $key => $value)
			{
				$this->data[$key]=$value;
			}
		}

	}