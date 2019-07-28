<?php
/*
*@ Main index file
*/
$pagetitle ="Cristi -> :D";
$section ="home";
include ("inc/header.php"); 
 
?>

	<div id="main-wrapper"> <!-- main-wrapper -->
		<div id="container">
		
			<h1>First words
<?php

function get_browser_name($user_agent)
{
    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
    elseif (strpos($user_agent, 'Edge')) return 'Edge';
    elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
    elseif (strpos($user_agent, 'Safari')) return 'Safari';
    elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';
    
    return 'Other';
}

// Usage:

echo get_browser_name($_SERVER['HTTP_USER_AGENT']);

?>
?>
			</h1>
			
			<p>This is my final year in college and for my final exam, I am working on a project regarding internet privacy. This website is gonna try and catch as much data as it can about you the end-user and throw it in a database.  
			</p>

			<p>We send information about everything involuntary through the internet, so between our searches, likes and tweets assumes that in those google, facebook and tweeter apps everything is deeply recorded. 
			</p>

			<p>One of the problems is that those data gathering is not just limited to the tab in which the app resides :D.  
			</p>

			<p>Third party cookies, flash content, etc are just some of the ways that they are liable to a moral debate. Way easier for someone with some IT background to circumvent en-masse for-profit surveillance but the large majority I assume 90% users barely know what a cookie, protocol or database is. Even more ridiculous is that over 50% just stupidly click wizards and check accept by habit and without too much understanding.
			</p>

			<p>You can't sue Microsoft if u don't have an original windows no matter who installs it. You have one when u buy it for about 100$ or are given OEM by the company that sells the computer. ANYTHING else means it is not legally acquired and u can be sued by the company if ever presented to the law, further it just means that they can do largely whatever.    
			</p>

			<p>Again not a problem for me or you if any authority may have the legal right to check ur machine with a court order it actually may prevent evil doers from using efficient means, if the police does it you are gonna know about it and have the power to seek justice, but if the private sector does it every time without any regard :D...
			</p>

			<p>I am gonna explore some of the ways that I can gather info about you just by visiting the site no third party cookies or others. And btw I'm not a bad guy :D  and zombie cookies exist.
			</p>
		
		</div>
		
	</div> <!-- end main-wrapper -->
	
<?php


?>
<?php
include ("inc/footer.php");
?>