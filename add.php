<?php

if(isset($_POST['submit'])){
	$task = $_POST['task'];
	$date = $_POST['date'];

	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "todo");

	// insert task into database
	$sql = "INSERT INTO tasks (task, date) VALUES ('$task', '$date')";
	mysqli_query($conn, $sql);

	// redirect to index page
	header('location: index.php');
}

?>
