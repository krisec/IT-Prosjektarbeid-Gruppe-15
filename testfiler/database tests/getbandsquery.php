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
		echo "<p>";
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Genre: " . $row["genre"]. "<br>";
            }
        } else {
            echo "0 results";
        }
		echo "</p>";
        $conn->close();
    ?>