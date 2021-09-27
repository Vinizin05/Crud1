<?php

// forçar exibição de erro php
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$host="localhost:8889";
$user="root";
$pass="root";
$base="vini_base";

$conn = mysqli_connect($host, $user, $pass, $base);

?>