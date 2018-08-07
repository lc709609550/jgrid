<?php
$host = "127.0.0.1";
$port = 3310;
$db_user = "root";
$db_pass = "bhxz";
$db_name = "demo";

$link = mysql_connect("{$host}:{$port}", $db_user, $db_pass);
mysql_select_db($db_name, $link);
mysql_query("SET names UTF8");
header("Content-Type: text/html; charset=utf-8");

?>