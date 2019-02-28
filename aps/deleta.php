<?php

$link = mysqli_connect("localhost","root","","site");

$cont = $_GET['batata'];

//$cod = mysqli_query($link, "select max(post_cod) from postagem");

//$row = mysqli_fetch_row($cod);

$deletar = mysqli_query($link, "DELETE FROM `postagem` WHERE post_cod = $cont");

?>
<?php
			echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL=index.php'>";
		?> 


