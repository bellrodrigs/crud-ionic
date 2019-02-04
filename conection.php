<?php
/*define('DB_NAME', 'agenda');
define('DB_USER', 'root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');*/

define('DB_NAME', 'sql10277402');
define('DB_USER', 'sql10277402');
define('DB_PASSWORD','DAZfCjCn7X');
define('DB_HOST','sql10.freemysqlhosting.net');

$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if(!$mysqli) {
	print"Falha na conexão com Banco de dados";
}
?>