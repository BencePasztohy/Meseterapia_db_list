<?php 
$server = "localhost";
$user = "wordpress-meset";
$password = "wordpress-meset";
$database = "wordpress-meset";
$connection = mysqli_connect($server, $user, $password, $database);
	if (mysqli_connect_errno()!=0) print "Kapcsolódási hiba: ".mysqli_connect_error();
	else {
		$command = 'select image, id, name, address, email, tel from meseterapeutak order by id';
		if ($l = $connection->query($command)) {
			
			while ($row = mysqli_fetch_assoc($l)) {
				echo "<div class='card'>";
				foreach ($row as $key=>$val) {
					if ($key == "image") {
						echo "<img src='images/$val'>";
					} else
					echo "<p>$val</p>";
				}
				echo "</div>";
			}
		} else print "Olvasási hiba: ".mysqli_error($connection);
	}
?>