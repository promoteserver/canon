<?php

$db_host = "internal-db.s39141.gridserver.com"; // database host

$db_name = "db39141_canonbury"; // database name

$db_login = "db39141"; // database user

$db_pass= "Sq3y3yWj"; // database password



$db = mysql_connect($db_host, $db_login, $db_pass);

mysql_select_db($db_name,$db) or die ("NO SE PUDO CONECTAR");

?>