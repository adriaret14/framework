<?php
	class Request{
			static private $query=array();

		static function retrieve(){
			$array_query=explode('/', $_SERVER['REQUEST_URI']);
			//quitamos la raiz
			array_shift($array_query);

			//si no está en la raiz...
			if($array_query[0]==APP_W){
				array_shift($array_query);
			}
			//si al final tiene una /
			if(end($array_query)==""){
				array_pop($array_query);
			}

			 self::$query=$array_query;
			//var_dump($array_query);
		}
		static function getCont(){
			return array_shift(self::$query);
		}
		static function getAct(){
			return array_shift(self::$query);
		}
		static function getParams(){
			if ((count(self::$query))%2==0){
        		 return self::$query;
    		}
   			 else{
     		 	echo 'ERRROR parameters and values must be odd!';
      			exit;
			}
	}
}