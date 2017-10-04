<?php
// Enable Output Buffering
ob_start();

// Enable Sessions
session_start();

// Define Directory Paths
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

// Define Database config
defined("DB_HOST") ? null : define("DB_HOST", getenv("MYSQL_SERVICE_HOST"));
defined("DB_USER") ? null : define("DB_USER", getenv("MYSQL_USERNAME"));
defined("DB_PASS") ? null : define("DB_PASS", getenv("MYSQL_PASSWORD"));
defined("DB_NAME") ? null : define("DB_NAME", getenv("MYSQL_DATABASE"));

// Include site-wide php files
require_once("vendor/autoload.php");
require_once("db.php");
require_once("includes/classes/Database.php");
require_once("includes/classes/Login.php");
require_once("includes/classes/User.php");
require_once("includes/classes/FB.php");
?>
