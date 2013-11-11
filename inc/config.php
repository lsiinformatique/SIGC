<?php
include ('error.php');
//mysql

$host = "localhost";
$user = "root";
$pass = "1992maxime";
$bdd = "sigc";

mysql_connect($host, $user, $pass);
mysql_select_db($bdd);

$rootsite = "http://192.168.1.24/sigc/";

//versionning

define('REMOTE_VERSION', 'http://www.lsiinformatique.fr/public/sigc/update.txt');
define('VERSION', '0.1.0:2033');
$currentversion_server = file_get_contents(REMOTE_VERSION);
$getversion = VERSION;
?>