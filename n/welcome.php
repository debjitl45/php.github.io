<link rel="stylesheet" type="text/css" href="style.css">
<?php session_start(); ?>
<div class="body content">
	<div class="welcome">
		<div class="alert alert-success"><?=$_SESSION['message'] ?> </div>
		<span class="user"><img src="<?= $_SESSION['avatar']?>"></span><br>
		Welcome!<span class="user"><?=$_SESSION['username']?></span>
	</div>
</div>
<?php
$mysqli = new mysqli('localhost','root','','accounts');
$sql    = "SELECT username,avatar FROM users";
$result =$mysqli->query($sql);
?>

<div id="registered">
	<span>All Registered Users</span>
	<?php
	while ($row=$result->fetch_assoc()) {
		echo "<div class='userlist'><span>$row[username]</span><br/>";
		echo "<img src='$row[avatar]'></div>";
	}
	?>
</div>