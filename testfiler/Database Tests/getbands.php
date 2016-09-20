<?php
	$servername = "mysql.stud.ntnu.no";
	$username = "krsta";
	$password = "Lokoer123";
	$dbname = "krsta_testdb";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM bands";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr>\n";
			echo "<td>" . $row["name"]. " </td>\n<td> " . $row["genre"]. "</td>\n<td>" . $row["spotifyid"]. "</td>\n<td></td>\n<td></td>";
			echo "</tr>\n";
		}
	} else {
		echo "0 results";
	}
	$conn->close();
?>