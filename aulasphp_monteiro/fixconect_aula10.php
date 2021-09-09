		<?php
			function DBConnect() {
				$host = 'localhost';
				$user = 'root';
				$pass = '';
				$database = 'fixacao2';
				
				$link = mysqli_connect($host, $user, $pass, $database) or die(mysqli_error($link));
				
				mysqli_set_charset($link, 'utf8') or die(mysqli_error($link));
				
				return $link;
			}
			
			function DBClose($link) {
				mysql_close($link) or die(mysqli_error($link));
			}
		
		?>