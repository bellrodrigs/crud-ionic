<?php
/*define('DB_NAME', 'agenda');
define('DB_USER', 'root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');*/

define('DB_NAME', 'id6302249_agenda1');
define('DB_USER', 'id6302249_bellrodrigs');
define('DB_PASSWORD','12345');
define('DB_HOST','localhost');

$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if(!$mysqli) {
	print"Falha na conexão com Banco de dados";
}
?>