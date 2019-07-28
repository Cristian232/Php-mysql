<?php
// Root-Relative web-addresses and absolute server paths throughout all the code

//define ("BASE_URL", "/");
if (	!defined( "ROOT_PATH" ) ) define(	"ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/");
if (	!defined( "ABS_PATH"  )	) define(	"ABS_PATH", $_SERVER['DOCUMENT_ROOT']);
if ( 	!defined('ABSPATH'	  )	)	 define('ABSPATH', dirname(__FILE__) . '/');


// PDO Object

if (!defined( "DB_HOST")) define("DB_HOST","localhost");
if (!defined( "DB_NAME")) define("DB_NAME", "cristide_dev");
if (!defined( "DB_USER")) define("DB_USER", "cristide_dev");
if (!defined( "DB_PASS")) define("DB_PASS", "test");


// default is 3306
if (!defined( "DB_PORT")) define("DB_PORT", 3306);
if (!defined( "DB_CHARSET")) define("DB_CHARSET","UTF-8");


// $db_host	=	"localhost";
// $db_user	=	"cristide_dev";
// $db_pass	=	"test";
// $db_name	=	"dev";
?>