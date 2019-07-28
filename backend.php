<?php

// Exit if accessed directly
//if ( ! defined( 'ABSPATH' ) ) exit; 
 
$pagetitle ="Cristi -> :D";
$section ="backend";

include ("inc/header.php"); 
require_once ("inc/connect_db.php");
require ("inc/interogari.php");
// var_dump($pagetitle);
// print_r($array);
/*
	<pre>print_r($costel)</pre>
*/
//require ("inc/header.php");

?>
		<div id="container">
			<div class="container-title">
				<a href="" title="">
					<h1>Interogari</h1>
				</a>
		
		<?php 
		
	function write_to_database() {
		if(	(!$ip) && (!$browser) ) {
			try {
				$sql = "INSERT INTO `USERS` (`userName`, `password`) VALUES (`test`, `testy`)";
				$sth = $conn->query($sql);
			} catch(PDOException $e) {
				echo $e->getMessage();
			}
		}
	}
	write_to_datase();
		
		//$test =isset($_COOKIE["test"]) ?  $_COOKIE["test"] : "";
		// echo $test;
		function get_user_agent() {
			//echo "Browser-ul dvs. este: " .'<br />';
				return ($_SERVER['HTTP_USER_AGENT']);
		}
		
		$browser = get_user_agent();
		echo $browser;
		
		function get_ip_address() {
			echo "<br />";
			echo "Adresa dumneavoastra IP este: ";
			echo $_SERVER['REMOTE_ADDR'];
		}
		
		$ip = get_ip_address();
		//echo $ip;
		?>
		<pre>
			<?php //echo var_dump($_SERVER); ?>
		</pre>
		
		
		
		
		
		</div>



<?php
include ("inc/footer.php");
?>