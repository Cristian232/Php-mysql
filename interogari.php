<?php
// Exit if accessed directly
//if ( ! defined( 'ABSPATH' ) ) exit; 


// Scrie ce interogez 
try {
 	//$result =  $db -> prepare('SELECT * FROM `tb_1');
 	//$result = $db->query('SELECT * FROM `dev_table_1` ORDER BY `tb_name` ASC');
	$result =  $db -> prepare('SELECT * FROM `dev_table_1` ');
	$result = $db->query('SELECT * FROM `dev_table_1` ORDER BY `id` ASC');
		echo '<strong>Interogare reusita!</strong>' ."<br />";
	}  
catch (PDOException $e) {
 	echo '<b>Interogarea nu a reusit. A aparut o eroare !</b>' ."<br />" . $e->getMessage() ."<br />". "Codul: " . $e->getCode() ."<br />" . "Linia: " .$e->getLine();
	exit;
}

?>