<?php
// simple conexion a la base de datos
function connect(){
	return new mysqli("us-cdbr-iron-east-05.cleardb.net","b261a7fae50163","630762a0","heroku_f7cde062aae3a1e");
}

?>