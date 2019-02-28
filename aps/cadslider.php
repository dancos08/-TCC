		<?php
			$link = mysqli_connect("localhost","root","","site");
			$slide = $_POST['imgnovo'];
			$filtro = $_POST['filtro'];
			if($filtro == '1'){
				$sql3="INSERT INTO `slide`(`primeiro_slide`) VALUES ('$slide')";
				
			} else if($filtro == '2'){
				$sql3="INSERT INTO `slide2`(`segundo_slide`) VALUES ('$slide')";
				
			} else if($filtro == '3'){
				$sql3="INSERT INTO `slide3`(`terceiro_slide`) VALUES ('$slide')";
			}
			$res=mysqli_query($link, $sql3);
		?>
		
		<?php
			echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL=index.php'>";
		?> 