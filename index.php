<!DOCTYPE html>
<html>
<head>
	<title>Todo List</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="wrapper">
		<h1>Todo List</h1>
		<form method="post" action="add.php">
			<input type="text" name="task" placeholder="Add new task" required>
			<input type="date" name="date" required>
			<button type="submit" name="submit">Add</button>
		</form>
		<?php include 'list.php'; ?>
	</div>
</body>
</html>
