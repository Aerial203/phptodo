<?php
	// Connect to database
	$conn = mysqli_connect("localhost", "root", "", "todo");

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Delete task from database
	$id = $_GET["id"];
	$sql = "DELETE FROM tasks WHERE id=$id";
	mysqli_query($conn, $sql);

	// Close database connection
	mysqli_close($conn);

	// Redirect to index.php
	header("Location: index.php");
	exit();
?>