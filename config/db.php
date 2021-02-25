<?php 
$CONFIG = require_once "environment.php";

global $CONFIG;

$config = $CONFIG['database']['mysql'];

$db = new mysqli(
    $config['host'],
    $config['user'],
    $config['password'],
    $config['database'],
    $config['port']
);

if ($db->connect_error) {
    error_log('Connect Error(' . $db->connect_errno . ') ' . $db->connect_error);
    exit("Erro ao conectar com o banco de dados!");
}
