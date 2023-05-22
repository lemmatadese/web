
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			margin-top: 20px;
		}

		th, td {
			text-align: left;
			padding: 8px;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}

		tr:nth-child(even) {background-color: #f2f2f2;}

		.container {
			max-width: 800px;
			margin: auto;
			margin-top: 50px;
			padding: 20px;
			border: 1px solid #ddd;
			border-radius: 5px;
			box-shadow: 0 0 10px #ddd;
		}

		h1 {
			text-align: center;
			margin-bottom: 30px;
		}

		button {
			background-color: #4CAF50;
			color: white;
			padding: 8px 16px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			float: right;
		}

		button:hover {
			background-color: #3e8e41;
		}

		form {
			display: inline-block;
		}

.modal {
			display: none;
			position: fixed;
			z-index: 1;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow: auto;
			background-color: rgba(0, 0, 0, 0.4);
		}

		.modal-content {
			background-color: #fefefe;
			margin: 15% auto;
			padding: 20px;
			border: 1px solid #888;
			width: 60%;
			position: relative;
			box-shadow: 0 0 10px #ddd;
			border-radius: 5px;
		}

		.close {
			color: #aaa;
			float: right;
			font-size: 28px;
			font-weight: bold;
			position: absolute;
			top: 0;
			right: 10px;
		}

		.close:hover,
		.close:focus {
			color: black;
			text-decoration: none;
			cursor: pointer;
		}

		.modal-header {
			padding-bottom: 10px;
			border-bottom: 1px solid #ddd;
		}

		.modal-body {
			padding: 10px 0;
		}

		.modal-footer{
			padding-top: 10px;
			border-top: 1px solid #ddd;
			text-align: right;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>User Registration Data</h1>
		<table>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Middle Name</th>
				<th>Last Name</th>
				<th>Date of Birth</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Address</th>
			</tr>
			<?php
			// Set the database credentials
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "userregisteration";

			// Create a connection to the MySQL server
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}

			// Fetch data from the table
			$sql = "SELECT * FROM userreg";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>" . $row["fname"] . "</td>";
					echo "<td>" . $row["mname"] . "</td>";
					echo "<td>" . $row["lname"] . "</td>";
					echo "<td>" . $row["dateob"] . "</td>";
					echo "<td>" . $row["email"] . "</td>";
					echo "<td>" . $row["gender"] . "</td>";
					echo "<td>" . $row["addres"] . "</td>";
                    echo "<td>" . $row["passwor"] . "</td>";

					
				}
			} else {
				echo "<tr><td colspan='9'>0 results</td></tr>";
			}

			// Close the connection
			mysqli_close($conn);
			?>


		</body>
        </html>