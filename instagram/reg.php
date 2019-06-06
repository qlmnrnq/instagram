<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'aihal_pn_9');
$query = mysqli_query($con, "INSERT INTO instagram (email, name, nickname, password) VALUES ('" . $_POST['email'] . "', '" . $_POST['name'] . "', '" . $_POST['nickname'] . "', '" . $_POST['password'] . "')");
header('Location: http://tupoaihal/instagram/login.php');
 ?>