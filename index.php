<?php
session_start();
try {
    $db = new PDO("mysql:host=localhost;dbname=eight_rss;charset=utf8", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die("Error: Couldn't connect to the database.");
}

define('WEBROOT', dirname(__FILE__));
define('BASE_URL', dirname($_SERVER['SCRIPT_NAME']));
define('ROOT', dirname(WEBROOT));
define('DS', DIRECTORY_SEPARATOR);
define('CORE', ROOT . DS . 'core');

require "vendor/autoload.php";

use App\Resources\Launcher;

//Initialize & launch app
$launcher = new Launcher();
$launcher->start();