<?php

// connect to database
$conn = mysqli_connect("localhost", "root", "", "todo");

// select tasks from database
$sql = "SELECT * FROM tasks";
$result = mysqli_query($conn, $sql);

// display tasks in table
echo "<table>";
echo "<tr><th>Task</th><th>Date</th><th>Action</th></tr>";
while($row = mysqli_fetch_assoc($result)){
	echo "<tr><td>".$row['task']."</td><td>".$row['date']."</td><td><a href='delete.php?id=".$row['id']."'>Delete</a></td></tr>";
}
echo "</table>";

?>
