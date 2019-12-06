	<?php

	class conectar{
		public static function conexion(){
			$pdo = new PDO('mysql:host=us-cdbr-iron-east-05.cleardb.net;dbname=heroku_f7cde062aae3a1e;charset=latin1', 'b261a7fae50163', '630762a0');
			//Filtrando posibles errores de conexión.
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
		}
	}



	?>