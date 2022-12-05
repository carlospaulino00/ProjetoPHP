<?php

$hostname = "localhost";
$nome = "root";
$senha = "";
$db = "projetophp";


$mysqli = new mysqli($hostname, $nome, $senha, $db);

if ($mysqli->connect_errno) {
    die("Connect failed:$mysqli->connect_error");
}