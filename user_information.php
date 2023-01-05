<?php

$servername = "localhost";
$username = "root";
$password = "password";
$databasename = "db";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $databasename);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
echo "\n";
$n = readline('Enter a name: ');
$e = readline('Enter a email: ');

$sql = "INSERT INTO user_information (name,email) VALUES ('$n','$e')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
	  echo "\n";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$query = "SELECT * FROM `user_information`;";
$result = $conn->query($query);

	if ($result->num_rows > 0)
	{
		// OUTPUT DATA OF EACH ROW
		while($row = $result->fetch_assoc())
		{
			echo 'Name: '.
				$row["name"]. " | Email: " .
				$row["email"]."\n";
		}
	}
	else {
		echo "0 results";
	}
mysqli_close($conn);
?>