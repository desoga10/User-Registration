<link rel="stylesheet" href="style.css" type="text/css">


<?php session_start();?>

<div class="body content">
	<div class="welcome">
	<div class="alert alert-success"><?= $_SESSION['message'] ?></div>
	<span class="user">	<img src="<?= $_SESSION['avatar'] ?>"> </span> <br />
	welcome <span class="user"><?= $_SESSION['username'] ?> </span>

	<?php

	$mysqli = new mysqli('localhost', 'root', '', 'blogger');
	$sql = 'SELECT username, avatar FROM users';
	$result = $mysqli->query($sql);  //$result = mysqli_result object

	?>


	<div id ="registered">
		<span> All Registered Users </span>

		<?php
		while($row = $result->fetch_assoc()) {
			echo "<div class='userlist'>$row[username]</span> <br />";
			echo "<img src='$row[avatar]'></div>";
		}
		?>