<?php
/**
* using mysqli_connect for database connection
 */

$databaseHost = 'localhost';
$databaseName = 'tgs_simbada';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

?>