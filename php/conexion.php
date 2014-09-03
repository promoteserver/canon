<?php


// Conectando, seleccionando la base de datos
$link = mysql_connect('internal-db.s39141.gridserver.com', 'db39141', 'Sq3y3yWj')
    or die('No se pudo conectar: ' . mysql_error());

mysql_select_db('_canonbury') or die('No se pudo seleccionar la base de datos');
?>