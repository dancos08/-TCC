		<?php
			$link = mysqli_connect("localhost","root","","site");
			$facebook = $_POST['inputFace'];
			$twitter = $_POST['inputTwitter'];
			$gmail = $_POST['inputGmail'];
			$sql2="INSERT INTO LINK (LINK_FACEBOOK,LINK_TWITTER,LINK_GOOGLE) values ('$facebook','$twitter','$gmail')";
			$res=mysqli_query($link, $sql2);
		?>
			<?php
			echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL=index.php'>";
		?> 