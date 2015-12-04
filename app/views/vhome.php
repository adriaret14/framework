<?php

	class vhome extends Vista
	{
		function __construct()
		{
			parent::__construct();

			//echo 'visita creada';
			$this->tpl=Template::load('Home');
		}
	}