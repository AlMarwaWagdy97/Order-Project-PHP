 <?php

session_start();

// Define the links
define("BURL", "http://127.0.0.1/projects/medical_serve/");
define("BURLA", "http://127.0.0.1/projects/medical_serve/admin/");
define("ASSETS", "http://127.0.0.1/projects/medical_serve/assets/");

// Define Path of projects
define("BL", __DIR__.'/');
define("BLA", __DIR__.'/admin/');

// connect to DataBase
require_once(BL.'functions/db.php');


?>
