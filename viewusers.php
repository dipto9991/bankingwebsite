<!Doctype html>
<html>
<head>
	<title>View Users</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <div class="topnav-right">
  <a class="active" href="transferdetails.php">Transfer History</a>
  <a class="active" href="viewusers.php">View Users</a>

  </div>
</div>
</div>  
<table class="viewusers">
	<h1>Details of Customers</h1>
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Credit</th>
		
	</tr>
	<?php
	$conn = mysqli_connect("localhost", "root", "", "users");
	if($conn-> connect_error){
		die("connection failed:". $conn-> connect_error);
	}

	$sql = "SELECT name, email, credit FROM Users";
	$result = $conn-> query($sql);

	if($result-> num_rows > 0){

		while ( $row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["name"] ."</td><td>".  $row["email"] ."</td><td>" .  $row["credit"] ."</td></tr>";
		}
		echo "</table>";

	}
	else {
		echo "no result";
	}
    $conn-> close();
	?>
</table>

</body>
</html>
