		<?php
			$link = mysqli_connect("localhost","root","","site");
			$titulo=$_POST['txtTitulo'];
			$imagem=$_POST['imgPost'];
			$texto=$_POST['txtTexto'];
			$sql="INSERT INTO POSTAGEM (POST_TITULO,POST_IMAGEM,POST_TEXTO) values ('$titulo','$imagem','$texto')";
			$res=mysqli_query($link, $sql);
		?>
		<?php
			echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL=index.php'>";
		?> 