<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>document</title>
	
<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'aihal_pn_9');
$query = mysqli_query($con, "SELECT * FROM instagram WHERE user_id = " . $_GET['id']);
?>
<?php $gavno=$query->fetch_assoc(); ?>
	

</head>
	<body>
		<div class="col-6 mx-auto">
		<div>
			<div>
				<?php echo '<img src="' . $gavno['avatar'] . '">';?>
			</div>
			<div>
				<?php echo '<h2>' . $gavno['nickname'] . '</h2>';?>
			</div>
			<div>
				<?php echo '<h2>' . $gavno['name'] . '</h2>';?>
			</div>
			<form action="insert.php" method="POST" enctype="multipart/form-data">
				<input type="file" name="img" placeholder="Картинка">
				<input type="" name="text" placeholder="Текст">
				<?php echo '<input type="hidden" name="id" value="' . $gavno['user_id'] . '">' ?>
				<?php echo '<input type="hidden" name="nickname" value="' . $gavno['nickname'] .'">' ?>
				<button>Добавить пост</button>
			</form>
		</div>
<?php $query = mysqli_query($con, "SELECT * FROM posts INNER JOIN instagram ON posts.user_id = instagram.user_id ORDER BY posts.post_id DESC") ;

?>
<?php for ($i=0; $i < $query->num_rows; $i++) { 
$asd = $query->fetch_assoc(); ?>

		<div>
			<div>
				<?php echo '<img src="' . $asd['avatar'] . '">'; ?>
			</div>
			<div>
				<?php echo '<h2>' . $asd['nickname'] . '</h2>'; ?>
			</div>
			<div>
				<?php echo '<img src="' . $asd['img'] . '">'; ?>
			</div>
			<div>
				<?php echo '<p>' . $asd['text'] . '</p>'; ?>
			</div>
		</div>
<?php } ?>
</div>
</body>
</html>