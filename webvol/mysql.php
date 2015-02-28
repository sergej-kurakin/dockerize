<?php

$mysqli = new mysqli('mysql', 'root', getenv('MYSQL_ROOT_PASSWORD'), 'mysql', 3306);
if ($mysqli->connect_errno) {
    echo 'Failed to connect to MySQL: (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
