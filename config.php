<?php
session_start();

$server = $_SERVER['SERVER_NAME'];

require_once 'config/db.php';

require_once 'Models/Vigilante.php';
require_once 'Models/Equipe.php';

global $CONFIG;

if ($CONFIG['env'] == "dev") {
    error_reporting(E_ALL);
    ini_set("display_errors", true);
    ini_set("log_errors", true);
}else{
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
    ini_set("display_errors", false);
    ini_set("display_startup_errors", false);
    ini_set("log_errors", true);
}
