<?php

	class Home extends Controller{
		protected $model;
		protected $view;

		function __construct(){
			//llamamos al constructor del padre
			parent::__construct();
			$this->model=new mhome;
			$this->view=new vhome;
			//echo "Hey controlador";

		}
		function home()
		{
			//echo "Soy la accion";
		}
	}