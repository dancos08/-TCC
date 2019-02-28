<html>
	<head>
		<title>Conexão com o BD</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
			$host="localhost";
			$user="root";
			$pass="";
			$banco="site";
			$conect=mysql_connect($host,$user,$pass) or die (mysql_error());
			mysql_select_db($banco) or die (mysql_error());
		
		?>
	</body>

</html>