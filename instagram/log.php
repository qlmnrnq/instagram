<meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'aihal_pn_9');
$query = mysqli_query($con, "SELECT * FROM instagram WHERE email = '" . $_POST['email'] . "' AND password = '" . $_POST['password'] . "'");
$gavno=$query->fetch_assoc();
echo $gavno['name']
 ?> .