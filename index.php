<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Iron Gear - Jabbit EU</title>
	
	<link rel="shortcut icon" href="assets/img/favicon.ico">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
	</head>
<body>
	<center>
		<a href="<?php $_SERVER['SCRIPT_NAME'] ?>"><img class="logo" src="assets/img/logo.png"></a><br />
		
	
		<h3> &lt; Jabbit - EU &gt; </h2>
		
		<br />
		<table style="border:none; margin:-14px;">
		<tr>
		<td>
		<a class="swap" href="https://discord.gg/j3bAk4J">
			<img src="assets/img/discord_w.png">
			<img src="assets/img/discord_c.png">
		</a>
		</td><td>
		<a class="swap" href="https://discord.gg/j3bAk4J">
			<img src="assets/img/wsl_w.png">
			<img src="assets/img/wsl_c.png">
		</a>
		</td>
		</tr>
		</table>
		<br /><br />
		<?php
		if( !isset( $_GET["action"] ) )
		{
		?>
		<p><a href="?action=progress">Our Progress</a>  |  <a href="?action=recruit">Join Us</a></p>

		
		<?php
		}
		else
		{
			$Action = $_GET["action"];
			
			if( $Action == "progress" )
			{
				echo 'Genetic Archives: 0/6<br />';
				echo 'Datascape: 0/9<br />';
				echo 'Y-83: 0/2<br />';
				echo 'Redmoon Terror: 0/7<br />';
				echo "<br /><br />Click <a href='" . $_SERVER['SCRIPT_NAME'] ."'>here</a> to go back!";
			}
			elseif( $Action == "recruit" )
			{
				echo 'something something guildpromotion<br />';
				echo "<br /><br />Click <a href='" . $_SERVER['SCRIPT_NAME'] ."'>here</a> to go back!";
			}
			else
			{
				echo "Invalid action specified.<br /><br />Click <a href='" . $_SERVER['SCRIPT_NAME'] ."'>here</a> to go back!";
			}
		}
		?>
	</center>
</body>
</html>