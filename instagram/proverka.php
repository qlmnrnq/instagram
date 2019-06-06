<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'aihal_pn_9');
$query = mysqli_query($con, "SELECT * FROM instagram WHERE email = '" . $_POST['email'] . "' AND password = '" .  $_POST['password'] . "'");
$asd = $query->fetch_assoc();
if($query->num_rows == 0){
	header('Location: http://tupoaihal/instagram/login.php');
} else {
	header('Location: http://tupoaihal/instagram/post.php?id=' . $asd['user_id']);
};
?>
