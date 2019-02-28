 		<?php
			$link = mysqli_connect("localhost","root","","site");
			$titulo = $_POST['tituloNossaLoja'];
			$texto = $_POST['txtNossaLoja'];
			$maps = $_POST['txtGoogleMaps'];

			$sql4="INSERT INTO `loja`(`loja_texto`, `loja_titulo`, `loja_maps`) VALUES ('$texto', '$titulo', '$maps')";
			$res=mysqli_query($link, $sql4);
		?>
		
		<?php
			echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL=loja-fisica.php'>";
		?> 