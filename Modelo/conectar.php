	<?php

	class conectar{
		public static function conexion(){
			
			try {
			
				$conexion = new mysqli("us-cdbr-iron-east-05.cleardb.net","b261a7fae50163", "630762a0", "heroku_f7cde062aae3a1e");
        		$conexion->query("SET NAMES 'utf8'");
			}
			catch(Exception $e){
				die("Error". $e->getMessage());
				echo "Linea del Error".$e->getLine();
			}
			return $conexion;
		}





	}



	?>