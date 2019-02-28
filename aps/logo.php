<?php
	$link = mysqli_connect("localhost","root","","site");
	$imglogo=$_POST['inptLogo'];
	$sql="INSERT INTO RESTO (IMG_LOGO) values ('$imglogo')";
	$res=mysqli_query($link, $sql);
	
?>
		<?php
			echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL=index.php'>";
		?>